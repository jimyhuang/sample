var Animal = {
  times:0,
  play: function (){
    for(var i = 0; i < 1000000; i++){
      this.times++;
    }
  }
};

var yana = Animal; 
yana.play();
console.log(yana.times);

var gabi = Animal;
gabi.play();
console.log(gabi.times);
// 印出的兩行字是？

/*
function Animal(){
  this.times = 0;
  this.play = function(){
    for(var i = 0; i < 1000000; i++){
      this.times++;
    }
  }
}

var yana = new Animal(); 
yana.play();
console.log(yana.times);

var gabi = new Animal();
gabi.play();
console.log(gabi.times);
*/


/*
var Animal = function (){
  this.times = 0;
};

Animal.prototype.play = function(){
  for(var i = 0; i < 1000000; i++){
    this.times++;
  }
};

var yana = new Animal();
yana.play();
console.log(yana.times);

var gabi = new Animal();
gabi.play();
console.log(gabi.times);

var t = Date.now();
for(var j = 0; j < 1000; j++){
  if(j % 100 == 0){
    console.log(j);
  }
  var ani = new Animal();
  ani.play();
}
t = Date.now() - t;
console.log(t/1000);
*/
