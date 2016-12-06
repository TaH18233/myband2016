<div id="paginationnews">
    <ul>
      {for $i=1 to $pages}
      <li>
        <a href="?page=home&page_nr={$i}" id="pagenum{$i}">{$i}</a>
      </li>
      {/for}
    </ul>
</div>
