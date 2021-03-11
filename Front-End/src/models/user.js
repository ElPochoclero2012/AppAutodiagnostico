export default class User {
    constructor(username, email, password, sex = "", dateob = new Date()) {
        this.username = username;
        this.email = email;
        this.password = password;
        this.sex = sex;
        this.dateob = dateob;
    }
}