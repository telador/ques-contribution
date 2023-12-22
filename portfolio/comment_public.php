<?php
    $comments = file("comments.txt"); 
    $name_color = '#2e291d';
    $comment_color = '#474030';
    $comments_per_page = 3; 
    $comments_per_page = $comments_per_page * 2;
    if (isset($_GET["page"])) {
      $current_page = $_GET["page"];
    } else {
      $current_page = 1;
    }

    $start_comment = ($current_page - 1) * $comments_per_page;
    $end_comment = $start_comment + $comments_per_page;

    echo "<div class='comment-container'>";
for ($i = $start_comment; $i < $end_comment; $i++) {
  if (isset($comments[$i])) {
    if ($i % 2 == 0)
      echo "<p class='comment' style='background-color:".$name_color.";'>" . $comments[$i] . "</p>";
    else
      echo "<p class='comment' style='background-color:".$comment_color."; margin-bottom: 10px;'>" . $comments[$i] . "</p>";
  }
}
echo "</div>";

$num_pages = ceil(count($comments) / $comments_per_page);
echo "<div id='pagination'>";
for ($i = 1; $i <= $num_pages; $i++) {
  if ($i == $current_page) {
    echo "<span class='current-page'>$i</span> ";
  } else {
    echo "<a class='page-link' href=\"?page=$i#bottomsite\">$i</a> ";
  }
}
echo "</div>";
?>