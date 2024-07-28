from flask import Flask, render_template, request, url_for
app = Flask(__name__)

@app.route("/", methods=["POST", "GET"]) #tells the URL where should go
def index():
    if request.method == "POST":
        name = request.form['username']
        render_template("index.html")

if __name__ == "__main__":
    app.run(debug=True)