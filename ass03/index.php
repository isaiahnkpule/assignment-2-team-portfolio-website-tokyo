<?php $currentTitle = 'HOME'; include "inc/html-top.inc"; ?>
  <?php include "inc/nav.inc"; ?>
    <header>
      <h1>Women In Computer Science</h1>
      <p>Team Tokyo Assignment 03</p>
    </header>
    <!-- YW: Navigation Bar -->

    <div class="container">
      <!-- YW: Like a newspaper, 3 columns representing each student with photo,
      and the link such as "Read More" that links directly to the accroding student.-->
      <!-- YW: For the JS plugin, I think it may be good to have photo pops out when clicked.
      If you have any suggestion, please let me know. -->
      <div class="column">
        <div class="about">
          <h2>Conley Ernst</h2>
          <span>CS, Junior</span>
          <img src="images/conley.jpg" alt="Conley">
          <p>I am a Junior at the University of Rochester double majoring in Computer Science and Digital Media Studies, which provides the unique intersection of engineering and creative arts. Studying to be a software engineer, my academic and professional experience has given me a strong understanding of both the technical and user experience sides of a product.</p>
        </div><!--div.about-->
        <div class="about">
          <h2>Fiona Jones</h2>
          <span>CS, Junior</span>
          <img src="images/fiona.jpg" alt="Fiona">
          <p>My name is Fiona Jones and I am currently a junior in my third year at Rochester. I am currently majoring in computer science with a focus in web development, studio arts with concentrations in digital art and photography, as well as a small cluster of linguistics based around analysis of meaning. I am currently living in The Woodlands, Texas and I have two other siblings, one who is currently in high school in the Woodlands and another that currently attends New York University in New York City.</p>
        </div><!--div.about-->
        <div class="about">
          <h2>Xiao Cheng</h2>
          <span>CS, Junior</span>
          <img src="images/xiao.png" alt="Xiao">
          <p>My name is Xiao Cheng, and my friends all call me Katherine/Kat. I am currently studying at the University of Rochester, majoring in Computer Science and minoring in Philosophy. Comparing to other CS students, my progress is kind of slower, because I transferred to this major in my Sophomore year. Originally, I was considering majoring in Audio and Music Engineering.</p>
        </div><!--div.about-->
      </div><!--div.column-->
    </div><!--div.container-->
    <?php include "inc/scripts.inc"; ?>
    <!-- YW: Footer -->
  </body>
</html>
