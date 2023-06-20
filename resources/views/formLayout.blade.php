
<!DOCTYPE html>
<head>

<header>
    <link href=" {{asset('css/formLayout.css')}}" rel="stylesheet"> 
    <link href="{{asset('css/navbar.css')}}" rel="stylesheet" >

</header>

<body class="formlayout-canvas">

   @include('navbar')

       
  <div class="form-canvas">  
        
       <div class="form-heading"> 
         @yield("form_heading")
       </div>
        
       @yield("create_form")
       
       <div> 
        @yield("bottom_heading")
       </div>

  </div>


</body>
</head>
