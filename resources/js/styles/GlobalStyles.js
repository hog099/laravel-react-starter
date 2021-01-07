// import 'react-toastify/dist/ReactToastify.css';
import "antd/dist/antd.css";
import 'react-perfect-scrollbar/dist/css/styles.css';
import { createGlobalStyle } from 'styled-components';

// import "antd/dist/antd.dark.css";
// import "antd/dist/antd.compact.css";


export default createGlobalStyle`
    @import url('https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap');
    
    @font-face {
        font-family: "Montserrat-Regular";
        src: url("../assets/fonts/montserrat/Montserrat-Regular.ttf") format("truetype");
    }


    * {
        margin: 0;
        padding: 0;
        outline: 0;
        box-sizing:border-box;
    }

    *:focus{
        outline: 0;
    }

    html, body, #root {
        height: 100vh;
    }

    body{
        -webkit-font-smoothing: antialiased;
    }

    body, input, button {
        font: 14px 'Roboto', sans-serif;
    }

    a{
        text-decoration: none;
    }
    
    ul{
        list-style: none;
    }

    button{
        cursor: pointer;
    }




/* ANTD DESIGN */

.ant-layout-header{
  background-color: #fff !important;

}
.ant-layout-sider{
  background-color: #fff !important;

}
.ant-layout-sider-zero-width-trigger{
  background-color: #fff !important;

}



.site-layout .site-layout-background {
  background: #fff;
}

.site-layout .site-layout-background-darken {
  background: #001529;
}



`;