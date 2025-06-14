const User = require(`./models/User`)
const Role = require(`./models/Role`)
const bcrypt = require(`bcryptjs`);
const {validationResult} = require(`express-validator`)
const jwt = require(`jsonwebtoken`)
const {secret} = require(`./config`)

const generateAccessToken = (id, roles) => {
    const payload = {
        id,
        roles
    }
    return jwt.sign(payload, secret, {expiresIn: "24h"})
}


class authController {
    async registration(req, res) {
        try {
            const errors = validationResult(req)
            if(!errors.isEmpty()) {
                return res.status(400).json({ message: `Error: `, errors})
            }
            const {username, password} = req.body
            const candidate = await User.findOne({username})
            if (candidate) {
                return res.status(400).json({ message: `User with such a name already exists` })
            }

            const hashPassword = bcrypt.hashSync(password, 7);
            const userRole = await Role.findOne({value: "USER"})
            const user = new User({ username, password: hashPassword, roles: [userRole.value]})
            await user.save()
            return res.json({ message: `User ${username} is registred successfully` })
        } catch (e) {
            console.log(e)
        }
    }

    async login(req, res) {
        try {
            const { username, password } = req.body
            const user = await User.findOne({ username })
            if (!user) {
                return res.status(400).json({ message: `User with such name does not exist` })
            }

            const validPassword = bcrypt.compareSync(password, user.password)
            if (!validPassword) {
                return res.status(400).json({ message: `Invalid password` })
            }

            const token = generateAccessToken(user._id, user.roles)
            return res.json({token})
        } 
        catch (e) {
            console.log(e)
            res.status(400).json({message: `login bla bla bla error`, e})
        }
    }

    async getUsers(req, res) {
        try {
            const users = await User.find()
            res.json(users)
        } catch (e) {
            console.log(e)
            res.status(400).json({ message: `user model error` })
        }
    }
}

module.exports = new authController()