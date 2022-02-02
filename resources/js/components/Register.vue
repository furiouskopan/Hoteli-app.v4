<template>
    <div>
     


    <div class="registration-form">
        <form @submit.prevent="handleSubmit">
            <div class="form-icon">
                <span><i class="icon icon-user"></i></span>
            </div>
            <div class="form-group">
                <input type="text" v-model="username" class="form-control item" id="username" placeholder="Корисничко име">
            </div>
            <div class="form-group">
                <input type="password" v-model="password" class="form-control item" id="password" placeholder="Лозинка">
            </div>
            <div class="form-group">
                <input type="text" v-model="email" class="form-control item" id="email" placeholder="Е-mail">
            </div>
            <div class="form-group">
                <input type="tel" v-model="telbroj" class="form-control item" id="phone-number" placeholder="Телефонски број">
            </div>
            <div class="form-group">
                <button type="submit" value="submit" class="btn btn-block create-account">Регистрација</button>
            </div>
        </form>
      
    </div>
    </div>
</template>
<script>
export default {
    data(){
        return{
            username: '',
            password: '',
            email: '',    
            telbroj: '',    
        }
    },
    methods:{
        handleSubmit(){
            const data = {
                    username: this.username,
                    password: this.password,
                    email: this.email,
                    telbroj: this.telbroj
                };
                console.log(data);
            }
        }
    }

</script>
<style lang="scss" scoped>
body{
    background-color: #3f4a61;
}

.registration-form{
	padding: 20px 0;
}

.registration-form form{
    background-color: rgb(153, 199, 241);
    max-width: 600px;
    margin: auto;
    padding: 50px 70px;
    border-top-left-radius: 30px;
    border-top-right-radius: 30px;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
}

.registration-form .form-icon{
	text-align: center;
    background-color: #5891ff;
    border-radius: 50%;
    font-size: 40px;
    color: white;
    width: 100px;
    height: 100px;
    margin: auto;
    margin-bottom: 50px;
    line-height: 100px;
}

.registration-form .item{
	border-radius: 20px;
    margin-bottom: 25px;
    padding: 10px 20px;
}

.registration-form .create-account{
    border-radius: 30px;
    padding: 10px 20px;
    font-size: 18px;
    font-weight: bold;
    background-color: #5791ff;
    border: none;
    color: white;
    margin-top: 20px;
}

.registration-form .social-media{
    max-width: 600px;
    background-color: #fff;
    margin: auto;
    padding: 35px 0;
    text-align: center;
    border-bottom-left-radius: 30px;
    border-bottom-right-radius: 30px;
    color: #9fadca;
    border-top: 1px solid #dee9ff;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
}

.registration-form .social-icons{
    margin-top: 30px;
    margin-bottom: 16px;
}

.registration-form .social-icons a{
    font-size: 23px;
    margin: 0 3px;
    color: #5691ff;
    border: 1px solid;
    border-radius: 50%;
    width: 45px;
    display: inline-block;
    height: 45px;
    text-align: center;
    background-color: #fff;
    line-height: 45px;
}

.registration-form .social-icons a:hover{
    text-decoration: none;
    opacity: 0.6;
}

@media (max-width: 576px) {
    .registration-form form{
        padding: 50px 20px;
    }

    .registration-form .form-icon{
        width: 70px;
        height: 70px;
        font-size: 30px;
        line-height: 70px;
    }
}
</style>