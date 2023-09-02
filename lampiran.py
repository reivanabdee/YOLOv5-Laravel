def pulang(nama,c):
    # with open("absen.csv", 'r+') as fx:
    db = mysql.connector.connect(host="localhost", user="xd",
                                    passwd="Linux@44", database="absen")
    cursor = db.cursor()
    cursor.execute("select id_absen from pulang")
    namesDatalist = []
    nnama = []


    databasess = cursor.fetchall()  
    for databases in databasess:
        namesDatalist.append(str(databases[0]))
        #print(f"ini database-{databases}")
        

    namelist = []


    for a in namesDatalist:
        entryname = a.split(',')
        #print(f"ini entryname-{entryname}")
        nnama.append(entryname[0])
        #print(f"ini entryname[0 ]-{entryname[0]}")
        
    if str(c) not in nnama:
        now = datetime.now()
        dtString = now.strftime('%H:%M:%S')
        hadir = now.strftime('%H')
        tanggal = now.strftime('%d-%m-%y')
        img_name = "foto/{}.png".format(nama)
        cv2.imwrite(img_name, im0)
        with open(img_name, "rb") as ff:
            photo = ff.read()                            # cursor.execute("SELECT nama,waktu FROM mhs")
            sql = "INSERT INTO pulang (pulang, id_absen) VALUES (%s,%s)"
            val = (dtString, c)
            cursor.execute(sql, val)
            db.commit() 

def masukk(nama,c):
    # with open("absen.csv", 'r+') as fx:
    db = mysql.connector.connect(host="localhost", user="xd",
                                    passwd="Linux@44", database="absen")
    cursor = db.cursor()
    cursor.execute("select nama,waktu from masuk")
    namesDatalist = []
    nnama = []

    databasess = cursor.fetchall()  
    for databases in databasess:
        namesDatalist.append(databases[0])
        

    namelist = []

    for a in namesDatalist:
        entryname = a.split(',')
        nnama.append(entryname[0])

        
    if nama not in nnama:
        now = datetime.now()
        dtString = now.strftime('%H:%M:%S')
        tanggal = now.strftime('%d-%m-%y')
        img_name = "foto/{}.png".format(nama)
        keterangan = "hadir"
        cv2.imwrite(img_name, im0)
        with open(img_name, "rb") as ff:
            photo = ff.read()                            # cursor.execute("SELECT nama,waktu FROM mhs")
            sql = "INSERT INTO masuk (nama, waktu, tanggal, foto, id_absen, keterangan) VALUES (%s,%s,%s,%s,%s,%s)"
            val = (nama, dtString, tanggal, photo, c, keterangan)
            cursor.execute(sql, val)
            db.commit()
            os.remove(img_name)
    # Write results
for *xyxy, conf, cls in reversed(det):
    if save_txt:  # Write to file
        xywh = (xyxy2xywh(torch.tensor(xyxy).view(1, 4)) / gn).view(-1).tolist()  # normalized xywh
        line = (cls, *xywh, conf) if save_conf else (cls, *xywh)  # label format
        with open(f'{txt_path}.txt', 'a') as f:
            f.write(('%g ' * len(line)).rstrip() % line + '\n')

    if save_img or save_crop or view_img:  # Add bbox to image
        c = int(cls)  # integer class
        # print(f"ini c {c}")
        label = None if hide_labels else (names[c] if hide_conf else f'{names[c]} {conf:.2f}')
        annotator.box_label(xyxy, label, color=colors(c, True))
        if conf >= 0.8:
            masuk = '12:00:10'
            masuk = datetime.strptime(masuk, '%H:%M:%S')
            mulai = datetime.now()
            mulaijam = mulai.strftime('%H:%M:%S')
            mulaijam = datetime.strptime(mulaijam, '%H:%M:%S')
            nama = names[c]
            if mulaijam < masuk:
                masukk(nama,c)
            elif mulaijam > masuk:
                pulang(nama,c)