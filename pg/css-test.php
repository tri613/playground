<style type="text/css">
.wrapper{
    height: 50%; 
    background-color: #D35D5D;
        text-align: center;
}

.wrapper:before{
    content: '';    
    display: inline-block;    
    vertical-align: middle;    
    height: 100%;
}

.content{
    background-color: #6199E4;
    display: inline-block;    
    vertical-align: middle;
    padding: 10px;
    max-width: 300px;
    /*height: 100px;*/
    /*width: 100px;*/

    -webkit-transition: 1s ease-in-out;
    -moz-transition: 1s ease-in-out;
    -o-transition: 1s ease-in-out;
    transition: 1s ease-in-out;
}

.content:hover{
    -ms-transform: translate(50px,0); /* IE 9 */
    -webkit-transform: translate(50px,0); /* Safari */
    transform: translate(50px,0); /* Standard syntax */
}

</style>

<div class="wrapper">
	<div class="content">
    Vertical align.<br>
    Also, adding (transition:1s ease-in-out) at '.content' with (transform: translate(50px,0);) at '.content:hover' for css transformimg animation. 
    </div>
</div>


<script type="text/javascript">

</script>

</div>
