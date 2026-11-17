<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="project-template.css">
  <title>Portfolio projects</title>
</head>
<body>

 <section class="projects-section container">
  <h1 >My Projects:</h1>

  <div class="projects">
     <?php foreach($projects as $project): ?>
    <div class="project">
      <div class="img-project">
      <img src="<?= $project['image'] ?>" alt="<?= $project['image'] ?>">
    </div>

      <div class="content-project">
        <div>
          <h2 class="project-title"><?= $project['title'] ?></h2>
          <p class="project-description"><?= substr($project['description'], 0,70) ?>...</p>
        </div>

        <div class="meta-data">
          <spn class="project-category"><?= $project['category'] ?></spn>
          <spn class="project-status <?= $project['status'] === "En cours" ? "enCoure" : "termine"; ?>"><?= $project['status'] ?></spn>
        </div>

        <div class="technologies-list">
          <?php foreach($project['technologies'] as $technologie ): ?>
            <span class="technologie"><?= $technologie ?></span>
          <?php endforeach ?>
        </div>
      </div>
    </div>

    <?php endforeach; ?>

  </div>
   
 </section>
  
</body>
</html>