<html>
<head>
   <script src="https://gymkhana.iitb.ac.in/profiles/static/widget/js/login.min.js" type="application/javascript"></script>
</head>
<body>
hello
<div id="sso-root"></div>
</body>
 <script type="application/javascript">

        new SSO_JS({
            config: {
                client_id: 'b7IzA0Zo3E2KC41C2D8T3ma1VAYlR7F1iJLANdiz',   // Compulsory
                scope: ['basic','ldap','profile'],    // Optional. Default is  ['basic']
                state: '', // Optional. Default None
                response_type: 'code',  // Optional. Default is 'code'
               // redirect_uri: 'https://gymkhana.iitb.ac.in/~ugacademics/courserank/newlogin.php',    //Optional
                sso_root: document.getElementById('sso-root'),
                /* Optional
                 document.getElementById don't work if your element is not in light DOM. In that case you need to
                 provide selector here. In most of the cases this will work.
                 */
            },
            colors: { // All Optional
                button_div_bg_color: '303F9F', // Background color of button
                button_anchor_color: 'FFFFFF', // Font color of Button
                logout_anchor_color: '727272', // Font color of logout mark (The one with 'Login as other user'
            },
        }).init();

    </script>
</html>
