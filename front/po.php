<style>
  fieldset{
    display:inline-block;
    vertical-align: top;
  }  
</style>
<div>
    目前位置：首頁 > 分類網誌 > <span class='nav-item'>健康新知</span>
</div>
<fieldset style="width:150px">
    <legend>分類網誌</legend>
<div class="type-item" style="cursor:pointer;color:blue;margin:10px 0" >健康新知</div>
<div class="type-item" style="cursor:pointer;color:blue;margin:10px 0" >菸害防制</div>
<div class="type-item" style="cursor:pointer;color:blue;margin:10px 0" >癌症防治</div>
<div class="type-item" style="cursor:pointer;color:blue;margin:10px 0" >慢性病防治</div>
</fieldset>
<fieldset style="width:550px">
    <legend>文章列表</legend>
    
</fieldset>


<script>
$(".type-item").on("click",function(){
    let text=$(this).text();
    $(".nav-item").text(text);
})
</script>