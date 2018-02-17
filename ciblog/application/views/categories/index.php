<h2><?=  $title; ?></h2>

<ul class="list-group">
<?php foreach($categories as $category) : ?> 
    <li class="list-group-item"><a href="<?php echo site_url('/categories/posts/'.$category['id']); ?>"><?php echo $category['name']; ?></a></li>
<?php endforeach; ?>
</ul> 
<br><br>

<nav aria-label="Page navigation example" style="margin-left: 42%" >
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="http://localhost:82/ciblog/categories/posts/1">1</a></li>
    <li class="page-item"><a class="page-link" href="http://localhost:82/ciblog/categories/posts/22">2</a></li>
    <li class="page-item"><a class="page-link" href="http://localhost:82/ciblog/categories/posts/21">3</a></li>
    <li class="page-item"><a class="page-link" href="http://localhost:82/ciblog/categories/posts/2">4</a></li>
    
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>

