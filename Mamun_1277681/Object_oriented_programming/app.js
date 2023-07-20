// const  computer =function(name, model){
//     this.name =name;
//     this.model = model;
  
// }
// const mac =new computer("macbook", "M1");
// const hp =new computer("HP", "M1");
// document.write(hp)
// const pc =new computer();
// const obj = {};
// obj.name = "code abc";
// obj.playlist=20;
// console.log(obj)

const Computer = function(name, model){
this.name = name;
this.model = model;
// this.aboutComputer = function(){
//     console.log(`this computer name is ${this.name} and model is ${this.model}`);}
    Computer.prototype.aboutComputer=function(){
        console.log(`this computer name is ${this.name} and model is ${this.model}`);
}
}
const mac = new Computer("mac", "m1");

const iphone = new Computer("iphone", "14pro");

console.log(mac, iphone);

mac.aboutComputer();

// const arr = [12, 23, 43, 2, 4, 67, 88];
// const everNumber = arr.filter(element =>element%2===0);

// console.group(Array.prototype);
// console.log(Array)
// console.log(everNumber)

// Array.prototype.filter= function(){
//     let arr = [];
//     for(let i = 0; i<this.length; i++){
//         if(this[i]%2==0){
//             arr.push(this[i]);
//         }
//     }
//     return arr;
   
// }
// console.log([2, 4, 5, 6, 7, 24, 87].filter());
const arr = [12, 23, 43, 2, 4, 67, 88];
const everNumber = arr.filter(element =>element%2===0);
console.log(everNumber)