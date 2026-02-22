var input = document.getElementById('inputbox');
var buttons = document.getElementsByTagName('button');

var expr = '';

for (var i = 0; i < buttons.length; i++) {
  buttons[i].onclick = function () {
    var num = this.innerText;

    if (num === '=') {
      expr = eval(expr);
      input.value = expr;
    }
     else if (num === 'AC') {
      expr = '';
      input.value = '';
    } 
    else if (num === 'DEL') {
      expr = expr.substring(0, expr.length - 1);
      input.value = expr;
    }
     else {
      expr = expr+num;
      input.value = expr;
    }
  };
}
