/*function start()
{
  rectangle(10, 20, 250, 250, "red");
  circle(20, 50, 50, "yellow");
  circle(200, 150, 70, "blue");
  triangle(120, 400, 250, 120, 600, 800, "black");
  ring(400, 200, 100, 10, "gray");
  line(100, 350, 750, 100, 10, "pink");
}*/

function update()
{
  if(mouseLeftDown)
    circle(mouseX, mouseY, 10, red);

  if(mouseRightDown)
    circle(mouseX, mouseY, 10, white);
}