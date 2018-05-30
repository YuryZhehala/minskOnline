</div>

  <div class="col-md-2">
    <div>
      <!--pogoda.by-->
      <!--Информер распространяется свободно и на безвозмездной основе. Однако, в случае изменения кода информера (в частности, удаления ссылок), POGODA.BY снимает с себя ответственность за конечный результат.-->

      <table width="180" height="180" style="background-color:#f2f2f2; border: #cccccc 1px solid; font-family:Tahoma; font-size:12px; color:#000000;"
        cellpadding="2" cellspacing="0">
        <tr>
          <td>
            <a href="http://6.pogoda.by/26850" style="font-family:Tahoma; font-size:12px; color:#003399;" title="Погода Минск на 6 дней - Гидрометцентр РБ"
              target="_blank">Погода Минск</a>
          </td>
        </tr>
        <tr>
          <td>

            <table width=100% height=100% style="background-color:#f2f2f2; font-family:Tahoma; font-size:12px; color:#000000;" cellpadding="0"
              cellspacing="0">
              <tr>
                <td>
                  <script type="text/javascript" charset="windows-1251" src="http://pogoda.by/meteoinformer/js/26850_1.js"></script>
                </td>
              </tr>
            </table>

          </td>
        </tr>

        <tr>
          <td align="right">Информация сайта
            <a href="http://www.pogoda.by" target="_blank" style="font-family:Tahoma; font-size:12px; color:#003399;">pogoda.by</a>
          </td>
        </tr>
      </table>
    </div>
  </div>

  <link type="text/css" rel="stylesheet" href="/media/bootstrap/css/bootstrap.min.css">
  <link type="text/css" rel="stylesheet" href="/media/css/style.css">
  <script src="http://code.jquery.com/jquery-1.8.3.js"></script>

  <div id="feedback">
    <div>Заказать обратный звонок</div>
    <ul>
      <li>
        <input name="fname" placeholder="Имя" type="text" />
      </li>
      <li>
        <input name="phone" placeholder="+7 (901) 234-56-78" type="text" />
      </li>
      <li class="last">
        <a href="#">Отправить</a>
      </li>
      
    </ul>
  </div>


  <br style="clear: both">
  <div id="footer">
    <?php $query="SELECT*FROM maintexts WHERE showhide='show'";
    $adr = mysqli_query($dbconn,$query);
    if (!$adr) {
      exit('error');
    }
while ($arr=mysqli_fetch_array($adr)) {
  //echo $arr['name'].'&nbsp;';
  echo "<a href = 'index.php?url=".$arr['url']."'>".$arr['name']."</a>&nbsp;";
}
?>




    <a href="mailto:milehalhevich@su.ru">
      milehalhevich@su.ru
    </a>
  </div>

  
</body>

</html>