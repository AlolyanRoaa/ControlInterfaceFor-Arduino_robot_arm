<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Control interface</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    
    <script type="text/javascript">
       
        
        function rangeValueE1(value){
            document.getElementById('E1').innerHTML = value;
            
        }
        function rangeValueE2(value){
            document.getElementById('E2').innerHTML = value;
            
        }
        function rangeValueE3(value){
            document.getElementById('E3').innerHTML = value;
            
        }
        function rangeValueE4(value){
            document.getElementById('E4').innerHTML = value;
            
        }
        function rangeValueE5(value){
            document.getElementById('E5').innerHTML = value;
            
        }
        function rangeValueE6(value){
            document.getElementById('E6').innerHTML = value;
            
        }
        
        
        
     </script>
</head>
<body>
    <section class="sec">
        
        <form action="PhpOutput.php" method="POST" onsubmit="" onreset="">
            
        <div class="card">
            
            <div class="toggle"></div>
            
            <div class="content">
                
         <div style="align-content: center">  
             
         <div class="slider">
            <p> <label class="lable">Engine 1:
               <input type="range" class="range" name="range1" id="range1" value="90" min="0" max="180" on mousemove="rangeValueE1(this.value)" onChange="rangeValueE1(this.value)"></label>
                <label class="lable" id="E1" name="E1">90</label></p>
         </div>
                
          <div class="slider">
            <p> <label class="lable">Engine 2:
               <input type="range" class="range" name="range2" id="range2"  value="90" min="0" max="180" on mousemove="rangeValueE2(this.value)" onChange="rangeValueE2(this.value)"></label>
              <lable class="lable" id="E2" name="E2">90</lable></p>
          </div>
                
         <div class="slider">
            <p> <label class="lable">Engine 3:
               <input type="range" class="range" name="range3" id="range3"  value="90" min="0" max="180" on mousemove="rangeValueE3(this.value)" onChange="rangeValueE3(this.value)"></label>
             <lable class="lable" id="E3" name="E3" >90</lable></p>
         </div>
                
         <div class="slider">
            <p> <label class="lable">Engine 4:
               <input type="range" class="range" name="range4" id="range4"  value="90" min="0" max="180" on mousemove="rangeValueE4(this.value)" onChange="rangeValueE4(this.value)"></label>
             <lable class="lable" id="E4" name="E4">90</lable></p>
         </div>
                
         <div class="slider">
            <p> <label class="lable">Engine 5:
               <input type="range" class="range" name="range5" id="range5"  value="90" min="0" max="180" on mousemove="rangeValueE5(this.value)" onChange="rangeValueE5(this.value)"></label>
             <lable class="lable" id="E5" name="E5" >90</lable></p>
         </div>
                
         <div class="slider">
            <p> <label class="lable">Engine 6:
               <input type="range" class="range" name="range6" id="range6"  value="90" min="0" max="180" on mousemove="rangeValueE6(this.value)" onChange="rangeValueE6(this.value)"></label>
             <lable class="lable"  id="E6" name="E6">90</lable></p>
         </div>
            </div>
                
            <div class="wrap"> 
                <div class="item">
                    <input type="submit" value="Save" id="save" name="save" class="on-lin">
                </div>
                <div class="item">
                    <input type="submit" value="Start" id="start" name="start" class="on-lin">
                </div>
              </div>
                
            </div>
        </div>
      
        </form>
    </section>
    
    
    <script>
        const sec = document.querySelector('.sec');
        const toggle = document.querySelector('.toggle');
        toggle.onclick = function(){
            sec.classList.toggle('dark');
        }
    </script>
</body>
</html>