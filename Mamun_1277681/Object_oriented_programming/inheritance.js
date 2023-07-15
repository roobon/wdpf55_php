class Computer {
    constructor(name, model){
        this.name=name;
        this.model=model;
    }
    aboutComputer(){
        console.log(`The computer name is ${this.name} and the model is ${this.model}`)
    }
    

}
const mac = new Computer("Macbook", "m1");
console.log(mac)

class Phone extends Computer{
    constructor(name, model, warrenty){
       
        super(name, model);
        this.warrenty=warrenty;
    }
    // aboutPhone(){
    //     console.log(`the phone name is ${this.name} and the model is ${this.model}`)
    // }
    aboutWarrenty(){
        console.log(`${this.name} provides ${this.warrenty
        } years of warrenty`)
    }
}
let phone = new Phone("iphone", "14 pro", 3);
phone.aboutWarrenty();
// phone.aboutPhone();
