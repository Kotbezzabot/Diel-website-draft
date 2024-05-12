
<?php
 
// Подключаем файл конфигурации
include "index_db.php";
 
// Получаем значение переменной "search" из файла "script.js".
if (isset($_POST['search'])) {
 
    // Помещаем поисковой запрос в переменной
    $Name = $_POST['search'];
 
    // Запрос для выбора из базы данных
    $Query = "SELECT * FROM ________________________1_ WHERE COL1 LIKE '%$Name%' LIMIT 110";
   
 
    //Производим поиск в базе данных
    $ExecQuery = mysqli_query($connectionDB, $Query);
 
    // Создаем список для отображения результатов
    echo '<ul>';
 
    //Перебираем результаты из базы данных
    while ($Result = mysqli_fetch_array($ExecQuery)) {
?>
        <!-- Создаем элементы списка. При клике на результат вызываем функцию обработчика fill() из файла "script.js". В параметре передаем найденное имя-->
      <table width="100%">
       <ul>
        <tr>
        <td width="20%"  onclick='fill("<?php echo $Result['COL1']; ?>")'>
            <a>
                <?php echo $Result['COL1']; 
                ?>
            </a>
        </td>
         <td width="20%" onclick='fill("<?php echo $Result['COL1']; ?>")'>
            <a>
                <?php 
                 echo $Result['COL2']; 

                ?>
            </a>
        </td>
         <td width="20%" onclick='fill("<?php echo $Result['COL1']; ?>")'>
            <a>
                <?php 
                     echo "<img src='". $Result['Photo'] . "' alt='' , max-width = '125px' , max-height = '125px', height = '125px' ,width = 'auto'/>";


                ?>
            </a>
        </td>
        <td width="20%" onclick='fill("<?php echo $Result['COL1']; ?>")'>
            
             <button display="inline-block" padding="10px" id="subtract">-</button>
             <input type="number" id="INPUT" min="0" value="0">
             <button display="inline-block" padding="10px" id="add">+</button>  
             <script src="script.js"></script>
        </td>
        <td width="20%" onclick='fill("<?php echo $Result['COL1']; ?>")'>
            <?php echo "<a><img src='http://cdn.onlinewebfonts.com/svg/img_304821.png' alt='' , max-width = '125px' , max-height = '125px', height = '70px' ,width = 'auto'/></a>"; 
           ?>
        </td>
    </tr>
</ul>
</table>

<?php
    }
}
?>