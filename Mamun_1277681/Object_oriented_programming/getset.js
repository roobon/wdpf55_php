class Computer{
    constructor(name, model){
        this.name = name;
        this.model=model;
    }
    aboutComputer(){
        console.log(`the computer name is ${this.name} and the model is ${this.model}`)
    }
    get computerName(){
        return this.name;
    }
    set computerName(value){
        this.name=value;
    }
}
const mac = new Computer("mac", "m1");
console.log(mac.computerName)
mac.computerName= "apple";
console.log(mac)