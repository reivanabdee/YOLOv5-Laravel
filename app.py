from flask import Flask
import mysql.connector
app = Flask(__name__)

@app.route("/")
def main():
    return "anjay"

@app.route("/db")
def dbs():
    db = mysql.connector.connect(host="localhost", user="xd",
                                    passwd="Linux@44", database="absen")
    cursor = db.cursor()
    cursor.execute("SELECT masuk.nama, masuk.waktu, pulang.pulang, masuk.id_absen FROM masuk LEFT JOIN pulang ON pulang.id_absen = masuk.id_absen ORDER BY masuk.waktu")
    anjay = cursor.fetchall() 
    return anjay

@app.route("/detect")
def detek():
    try:
        import os
        os.system("python3 absen.py --source 0 --weights best.pt")
        return "<h1>anjayyy</h1>"
    except:
        return "detek2!"

 
    

if __name__ == "__main__":
    app.run(debug=True)