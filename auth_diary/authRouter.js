const Router = require(`express`)
const router = new Router()
const controller = require(`./authController`)
const {check} = require("express-validator")
const authMiddleware = require(`./middleware/authMiddleware`)
const roleMiddleware = require(`./middleware/roleMiddleware`)


router.post(`/registration`, [
    check(`username`, "Username cannot be empty").notEmpty(),
    check(`password`, "Password must be in [4; 10]").isLength({min: 4, max: 10}),
], controller.registration)
router.post(`/login`, controller.login)
router.get(`/users`, roleMiddleware([`ADMIN`]), controller.getUsers)

module.exports = router