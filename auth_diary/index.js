const express = require(`express`)
const mongoose = require(`mongoose`)
const authRouter = require(`./authRouter`)
const cors = require('cors') // Добавляем cors

const PORT = process.env.PORT || 5000


const app = express()

app.use(cors())
app.use(express.json())
app.use("/auth", authRouter)

const start = async () => {
    try {
        await mongoose.connect(`mongodb+srv://leopiethecat:j8X52pFeoMo4Jaon@cluster0.ccuqsoa.mongodb.net/?retryWrites=true&w=majority&appName=Cluster0
`);
        app.listen(PORT, () => console.log(`server started on PORT ${PORT}`))
    } catch (e) {
        console.log(e)
    }
}

start()