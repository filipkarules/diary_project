const jwt = require(`jsonwebtoken`)
const {secret} = require(`../config`)


module.exports = function(roles) { //замыкание
    return function (req, res, next) {
    if (req.method === "OPTIONS") {
        next()
    }

    try{
        const token = req.headers.authorization.split(` `)[1]
        console.log(token)
        if(!token) {
            return res.status(403).json({ message: `Token is not found` })
        }
        const {roles: userRoles} = jwt.verify(token, secret)
        let hasRole = false
        userRoles.forEach(role => {
            if (roles.includes(role)) {
                hasRole = true
            }
        })
        if (!hasRole) {
            return res.status(403).json({ message: `You have no permisson for seeing that` })
        }
        next()

    } catch(e) {
        console.log(e)
        return res.status(403).json({ message: `User is not authorized`})
    }
}
}