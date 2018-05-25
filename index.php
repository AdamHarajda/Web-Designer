<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="css/css.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script crossorigin src="https://unpkg.com/react@16/umd/react.development.js"></script>
    <script crossorigin src="https://unpkg.com/react-dom@16/umd/react-dom.development.js"></script>
    
    <script src="https://unpkg.com/babel-standalone@6/babel.min.js"></script>

    <title>Učím sa HTML, CSS, SCSS a JS</title>
</head>
<body>
<!--
<script type="text/javascript" src="js/js.js"></script>
-->
<br>

<div id="root">
</div>

        <script type="text/babel">
            class Dimensions extends React.Component {

                constructor(props){
                    super(props) // nevráti mi to undefignet hodnotu ale prázdny objekt
                    
                    this.state = {
                        x: $(window).width(),
                        y: $(window).height()
                    }
                    this.display = this.display.bind(this)
                }
                
                display(){
                    this.setState({
                        x: $(window).width(),
                        y: $(window).height()
                    })
                }
                componentDidMount() {
                    this.timerID = setInterval( () => this.display(), 1)   

                }

                componentWillUnmount() {
                    clearInterval(this.timerID)
                }

                render() {
                    return <div> your display dimensions: {this.state.x} x {this.state.y}</div>
                }
            }
            ReactDOM.render( <Dimensions />, document.getElementById('root') )
        </script>
</body>
</html>