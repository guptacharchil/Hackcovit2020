import cv2
import numpy as np

#Setup classifier

face_cascade=cv2.CascadeClassifier('haarcascade_frontalface_default.xml')

#eye_cascade=cv2.CascadeClassifier('haarcascade_eye.xml')

phone_cascade=cv2.CascadeClassifier('Phone_Cascade.xml')
                                    
cap=cv2.VideoCapture(0)


def check(a):
    sum=0
    for i in a:
        sum=sum+i;
   # print(sum)
    if(sum/len(a)>1.5 or sum/len(a)<.75):
        print("cheating")
    else:
        print("fine")

def checkp(a):
    sum=0
    for i in a:
        sum=sum+i;
    #print(sum)
    if(sum/len(a)>.5):
        print("phone cheating")
    else:
        print("fine")

#list to check validate
validate=[]
validate_phone=[]


while True:
    ret, img=cap.read()

    gray=cv2.cvtColor(img, cv2.COLOR_BGR2GRAY)

    #Use classifier to detect faces
    faces=face_cascade.detectMultiScale(gray, 1.3, 5)

    phones=phone_cascade.detectMultiScale(gray, 3, 9)
    #print(faces)

    numberfaces=len(faces);
  #print(numberfaces)
    validate.append(numberfaces);
    if(len(validate)>20):
        check(validate)
        validate.clear()
    numberphone=len(phones);
    validate_phone.append(numberphone);
    if(len(validate_phone)>20):
        checkp(validate_phone)
        validate_phone.clear()

    for (x,y,w,h) in phones:
        cv2.rectangle(img, (x,y), (x+w, y+h), (255,0,255), 2)
        font = cv2.FONT_HERSHEY_SIMPLEX
        cv2.putText(img,'Phone',(x-w,y-h), font, 0.5, (11,255,255), 2, cv2.LINE_AA)
    
    for (x, y, w, h) in faces:
        cv2.rectangle(img, (x,y), (x+w, y+h), (255,0,0), 3)
        roi=img[y:y+h, x:x+w]
        roi_gray=gray[y:y+h, x:x+w]

    cv2.imshow('img', img)
    if (cv2.waitKey(30) & 0xff)==27:
        break

cap.release()
cv2.destroyAllWindows()
