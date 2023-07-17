// //class expresion
// const myClass = class{

// }
// //class declaration
// class myClass{

// }
class Computer{
    constructor(name, model){
        this.name = name;
        this.model=model;
    }
    aboutComputer(){
        console.log(`the computer name is ${this.name} and the model is ${this.model}`)
    }
}
const mac = new Computer("mac", "m1");
console.log(mac)
mac.aboutComputer();

class HouseRent{
    constructor(amount){
        this.amount=amount;
    }
    increaseHouseRent(){
        this.amount+=1000;
        console.log(`the next year house rent will be ${this.amount}`);

    }
}
const myHouse = new HouseRent(15000);
console.log(myHouse);
myHouse.increaseHouseRent();