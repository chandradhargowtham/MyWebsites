<?php include "../header/header.php"; ?><html><body><div class="container"><br><h1>Make a game object follow mouse pointer</h1><br><br><br><img src="../content/images/2020-12-20Capture.PNG" width="921" height="450"><br><br><br><b> Usecase :</b><br>A. To make a GameObject follow the cursor when LMB is down.<br>B. Create a trail behind the object.<br><br><b> Example : </b><br>1. Create a Sphere/ a circle - This is the object that should follow the cursor.<br>2. Create a script called follow.cs.<br>3. In the update() method, add the following lines of code: <br><code><br>if (Input.GetMouseButton(0))<br>        {<br>            Vector2 cursorPos = Camera.main.ScreenToWorldPoint(Input.mousePosition);<br>            transform.position = new Vector3(cursorPos.x,cursorPos.y,0);<br>// We can avoid the z=0 part in 2d space.<br>        }<br></code> <br>4. Attach the script to the Sphere/Circle Object and run the game.<br>5. We can also attach a Trail Renderer component to the sphere for a comet trail drag effect<br><br><b>Explanation :</b><br>We want to assign the cursor position as the sphere's position. If this code is in the Update() method, the position of the sphere is updated every frame.<br>There is a catch. We have to convert the 2d cursor position to the 3d space point. It should be constant and shouldn't change with different display devices and resolutions. We use the Camera method ScreenToWorldPoint() for this. It takes the mouse position as input and converts it to the onscreen point in the game world/3d environment.</div></body></html><br><br><?php include "../footer/footer.php"; ?>