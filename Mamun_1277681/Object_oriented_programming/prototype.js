const HouseRent = function(amount){
this.amount=amount;
HouseRent.prototype.increamentYearly = function(){
    this.amount+=1000;
    console.log(`next year my house rent will be ${this.amount}`)
}
HouseRent.prototype.decreamentYearly = function(){
    this.amount-=1000;
    console.log(`next year my house rent will be after decreament ${this.amount}`)
}
}
const myHouse = new HouseRent(15000);
console.log(myHouse)
myHouse.increamentYearly();
myHouse.decreamentYearly();