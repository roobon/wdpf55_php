const Computer = {
    name: "",
    model:"",
    aboutComputer (){
        console.log(`the computer name is ${this.name} and the model is ${this.model}`)
    }
}
let mac = Object.create(Computer);
mac.aboutComputer();
mac.name = "Macbook";
mac.model="m1";
console.log(mac)
let phone = Object.create(Computer);
phone.aboutComputer();
phone.name = "iphone";
phone.model = "14pro";
console.log(phone);
