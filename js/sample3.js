var a = 'Yana is so cute';
var b = a.replace('cute', 'smart');
console.log(b);

String.prototype.replace = function(arg1, arg2){
  arg1 = arg2;
  return 'and so cute.';
}
b = a.replace('lazy', 'smart');
console.log(b);
// 這段程式用console.log印出哪兩行字




/*
var a = '';
var b = '';
String.prototype.love = function(a, b){
  return a + ' love ' + b;
}
b = a.love('cat', 'dog');
console.log(b);
*/
