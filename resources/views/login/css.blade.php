<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

.container {
    width: 100%;
    height: 100vh;
    background: linear-gradient(rgba(0,0,50,0.8), rgba(46, 46, 46, 0.8)), url(/image/Baitul_Ilmi.jpeg);
    background-position: center;
    background-size: cover;
    position: relative;
}

.form-box {
    width: 90%;
    max-width: 450px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    background: #fff;
    padding: 50px 60px 70px;
    border-radius: 15px;
    text-align: center;
}

.form-box h1 {
    font-size: 30px;
    margin-bottom: 60px;

    color: #89B93B;
    position: relative;
}

.form-box h1::after{
    content: '';
    width: 30px;
    height: 4px;
    border-radius: 3px;
    background: #89B93B;
    position: absolute;
    bottom: -12px;
    left: 50%;
    transform: translateX(-50%);
}

.input-field {
    background: #eaeaea;
    margin: 15px 0;
    display: flex;
    align-items: center;
    max-height: 65px;
    transition: max-height 0.5s;
    overflow: hidden;
}

input {
    width: 100%;
    background: transparent;
    border: 0;
    outline: 0;
    padding: 18px 15px;
}

.input-field i {
    margin-left: 15px;
    color: #999;
}

form p {
    text-align: left;
    font-size: 13px;
}

form p a {
    text-decoration: none;
    color: #89B93B;
}

.btn-field{
    width: 100%;
    display: flex;
    justify-content: space-between;
}

.btn-field button {
    flex-basis: 48%;
    background: #89B93B;
    color: #fff;
    height: 40px;
    border-radius: 20px;
    border: 0;
    outline: 0;
    cursor: pointer;
    transition: background 1s;
}

.input-group {
    height: 280px;
}

.btn-field button.disable {
    background: #eaeaea;
    
    color: #555;
    
    transition: background 1s;
}
</style>