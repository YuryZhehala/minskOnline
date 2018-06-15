<a href = '#' onclik = 'delete.position(deleteprod.php?id=<?=$arr[id];?>Вы действительно хотите удалить?)'>
Удалить
</a>
DELETE * FROM product WHERE id="$_GET[id]"
function delete_position(url,ask) {
  if (confirm (ask)) {
    location.href = url;
  }
}
