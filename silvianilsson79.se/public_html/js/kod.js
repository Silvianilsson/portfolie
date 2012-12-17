/*function start()
{
  rectangle(10, 20, 250, 250, "red");
  circle(20, 50, 50, "yellow");
  circle(200, 150, 70, "blue");
  triangle(120, 400, 250, 120, 600, 800, "black");
  ring(400, 200, 100, 10, "gray");
  line(100, 350, 750, 100, 10, "pink");
}*/

function change_color_circle(x,y,radius,color)
{
  this.x=x;
  this.y=y;
  this.radius=radius;
  this.color=color;
}

var colors =[]
colors.push(new change_color_circle(130, 150, 20, "red"));
colors.push(new change_color_circle(130, 200, 20, "black"));
colors.push(new change_color_circle(130, 250, 20, "orange"));
colors.push(new change_color_circle(180, 150, 20, "purple"));
colors.push(new change_color_circle(180, 200, 20, "blue"));
colors.push(new change_color_circle(180, 250, 20, "brown"));
colors.push(new change_color_circle(80, 150, 20, "green"));
colors.push(new change_color_circle(80, 200, 20, "pink"));
colors.push(new change_color_circle(80, 250, 20, "yellow"));

var choosen_color = blue;

function draw_change_color()
{
  for (var i = 0; i < colors.length; i++) 
  {
    circle(colors[i].x, colors[i].y, colors[i].radius, colors[i].color);
  }
}

function isInCircle(posX, posY, circleX, circleY, radius)
{
  var x = (circleX - posX);
  var y = (circleY - posY);

  var length = sqrt( x*x + y*y);

  return length <= radius;
}

function set_choosen_color()
{
  for (var i = 0; i < colors.length; i++) 
  {
    if(mouseLeftDown && isInCircle(mouseX, mouseY, colors[i].x, colors[i].y, colors[i].radius))
      choosen_color = colors[i].color;
  }  
}

function update()
{
  draw_change_color();

  set_choosen_color();
  /*
  circle(130, 150, 20, "red");
  circle(130, 200, 20, "black");
  circle(130, 250, 20, "orange");
  circle(180, 150, 20, "purple");
  circle(180, 200, 20, "blue");
  circle(180, 250, 20, "brown");
  circle(80, 250, 20, "green");
  circle(80, 200, 20, "pink");
  circle(80, 150, 20, "yellow");
  */

   if(mouseLeftDown)
  {
    circle(mouseX, mouseY, 10, choosen_color);
  }

  if(mouseRightDown)
  {
    circle(mouseX, mouseY, 10, white);
  }
}