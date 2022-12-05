<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.js" type="text/javascript"></script>
</head>
<body>
<style>
/*CSS*/
input[type="text"]{
    height: 30px;
    border: 2px solid black;
}    
.form{
    border: 2px solid black;
    width: 300px;
    height: 160px;
}
.input{
    text-align: right;
    margin: 10px;
}
.button{
    text-align: right;
}
#submit{
    position: relative;
    border: none;
    padding: 5px 10px 5px 10px;
    width: 120px;
    color: white;
    background-color: green;
    font-size: large;
    font-family: 'Times New Roman', Times, serif;
    text-align: left;
    margin: 5px 10px 10px 0;
}
#label{
    text-align: left;
    margin-left: 15px;
    margin-bottom: 10px;
    font-size: 17px;
}
</style>
    <form>
        <div class="form">
            <div class="input">
                <!--Label for Username-->
                <label for="username">User Name : </label> 
                <!--Textbox for username-->
                <input type="text" id="username" placeholder=""/> 
            </div>
            <div class="button">
                <!--Submit Button-->
                <input type="button" id="submit" value="Submit" onclick="postValue()"/>
                <!--System Respond-->
                <p id="label" style="color: green">
                    Key in username and click submit
                </p>
            </div>
        </div>
    </form>
    <!--Javascript-->
    <script src="verify_ajax.js"></script>
</body>
</html>
