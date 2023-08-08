// const Computer = function(name, model){
//     this.name = name;
//     this.model = model;

//     Computer.aboutComputer =function(){
//         console.log(`the computer name is ${this.name}and the model is ${this.model}`);
//     }
// }
// const mac = new Computer("macbook", "m1");
// Computer.aboutComputer();
// console.log(mac)



class Computer{
    constructor(name, model){
        this.name = name;
        this.model = model;
        
    }
    aboutComputer(){
        console.log(`The computer name is ${this.name} and model is ${this.model}`)
    }
    static sayAboutComputer = function(){
        console.log("this is computer")
    }

}
const mac = new Computer("Macboook", "M1");
mac.aboutComputer();
Computer.sayAboutComputer();