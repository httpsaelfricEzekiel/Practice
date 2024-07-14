from flask import Flask
app = Flask(__name__)

@app.route("/") #tells the URL where should go
def index():
    return "<h1>Hello World</h1>"
    
if __name__ == "__main__":
    app.run(debug=True)