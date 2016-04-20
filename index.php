<<!DOCTYPE html>
<html>
<head>
  <title>
    <script type="text/javascript">
      function occ(){
      var arr = [1,5,4,6,3,2,3,4,2,5,4,4,5,3,5,1,5,2,3,4,5];
      var res=''; var c=0; var i=0;
      while (arr.length>0){
        i++;
          var x=arr[0];   
            for(var j=0;j<arr.length;j++){
            if(x == arr[j]){
              c++;
          }
        }

      res=res+arr[0]+'=>'+c+' // ';

      var arrx=[];
        for(var k=0;k<arr.length;k++){
          if(arr[k]!=x){
          arrx+=arr[k];
        }
    }
    c=0; arr = arrx;
    }
}
    </script>
  </title>
</head>
<body>

</body>
</html>







