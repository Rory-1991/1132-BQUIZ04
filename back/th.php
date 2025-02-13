<h2 class="ct">商品分類</h2>

<div class="ct">
    新增大分類
    <input type="text" name="big" id="big">
    <button onclick="addType('big')">新增</button>
</div>
<div class="ct">
    新增中分類
    <select name="selbig" id="selbig"></select>
    <input type="text" name="mid" id="mid">
    <button onclick="addType('mid')">新增</button>
</div>

<table class="all">
    <tr>
        <td class="tt">流行皮件</td>
        <td class="tt ct"><button>修改</button><button>刪除</button></td>
    </tr>
    <tr class='ct'>
        <td class="pp">女用皮件</td>
        <td class="pp"><button>修改</button><button>刪除</button></td>
    </tr>
    <tr class='ct'>
        <td class="pp">男用皮件</td>
        <td class="pp"><button>修改</button><button>刪除</button></td>
    </tr>
</table>

<script>
getBigs();

function addType(type){
    let name,big_id;
    switch(type){
        case 'big':
            name=$("#big").val();
            big_id=0;
            break;
        case 'mid':
            name=$("#mid").val();   
            bigId=$("#selbig").val();
        }
            $.post("./api/add_types.php",{name,big_id},function(){
                location.reload();
            })
}

function getBigs(){
    $.get("./api/add_types.php",function(bigs){
        $("$selbig").html
    })
}

</script>


<h2 class="ct">商品管理</h2>
<div class="ct">
    <button>新增商品</button>
</div>

<table class="all">
    <tr class="tt">
        <td class="ct">編號</td>
        <td class="ct">商品名稱</td>
        <td class="ct">庫存量</td>
        <td class="ct">狀態</td>
        <td class="ct">操作</td>
    </tr>
    <tr class="pp">
        <td class="ct">1</td>
        <td>2</td>
        <td class="ct"></td>
        <td class="ct"></td>
        <td class="ct"></td>
    </tr>
</table>