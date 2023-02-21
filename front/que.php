<?php
$ques=$Que->all(['parent'=>0]);
?>
<fieldset>
    <legend>目前位置 : 首頁 > 問卷調查</legend>
    <table>
        <tr>
            <td width="10%">編號</td>
            <td width="50%">問卷題目</td>
            <td width="10%">投票總數</td>
            <td width="10%">結果</td>
            <td width="10%">狀態</td>
        </tr>
    <?php
    foreach($ques as $key => $que){
    ?>
        <tr>
            <td><?=$key+1;?></td>
            <td><?=$que['text'];?></td>
            <td><?=$que['count'];?></td>
            <td>
                <a href="index.php?do=result&id=<?=$que['id'];?>"></a>
            </td>
            <td>
                <?php
                if(isset($_SESSION['login'])){
                    echo "<a href='index.php?do=vote&id={$que['id']}'>我要投票</a>";
                }else{
                    echo "請先登入";
                }
                ?>
            </td>
        </tr>
    <?php
    }
    ?>
    </table>
</fieldset>