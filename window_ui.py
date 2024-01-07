# -*- coding: utf-8 -*-

################################################################################
## Form generated from reading UI file 'window.ui'
##
## Created by: Qt User Interface Compiler version 6.4.1
##
## WARNING! All changes made in this file will be lost when recompiling UI file!
################################################################################

from PySide6.QtCore import (QCoreApplication, QDate, QDateTime, QLocale,
    QMetaObject, QObject, QPoint, QRect,
    QSize, QTime, QUrl, Qt)
from PySide6.QtGui import (QBrush, QColor, QConicalGradient, QCursor,
    QFont, QFontDatabase, QGradient, QIcon,
    QImage, QKeySequence, QLinearGradient, QPainter,
    QPalette, QPixmap, QRadialGradient, QTransform)
from PySide6.QtWidgets import (QApplication, QComboBox, QFrame, QGridLayout,
    QHBoxLayout, QLabel, QMainWindow, QPushButton,
    QSizePolicy, QStackedWidget, QVBoxLayout, QWidget)
import source_rc

class Ui_MainWindow(object):
    def setupUi(self, MainWindow):
        if not MainWindow.objectName():
            MainWindow.setObjectName(u"MainWindow")
        MainWindow.resize(723, 563)
        icon = QIcon()
        icon.addFile(u":/newPrefix/MadPlateLogo.jpg", QSize(), QIcon.Normal, QIcon.Off)
        MainWindow.setWindowIcon(icon)
        self.centralwidget = QWidget(MainWindow)
        self.centralwidget.setObjectName(u"centralwidget")
        self.horizontalLayout = QHBoxLayout(self.centralwidget)
        self.horizontalLayout.setSpacing(0)
        self.horizontalLayout.setObjectName(u"horizontalLayout")
        self.horizontalLayout.setContentsMargins(0, 0, 0, 0)
        self.stackedWidget = QStackedWidget(self.centralwidget)
        self.stackedWidget.setObjectName(u"stackedWidget")
        self.front_page = QWidget()
        self.front_page.setObjectName(u"front_page")
        self.verticalLayout_2 = QVBoxLayout(self.front_page)
        self.verticalLayout_2.setSpacing(0)
        self.verticalLayout_2.setObjectName(u"verticalLayout_2")
        self.verticalLayout_2.setContentsMargins(0, 0, 0, 0)
        self.frame = QFrame(self.front_page)
        self.frame.setObjectName(u"frame")
        self.frame.setFrameShape(QFrame.StyledPanel)
        self.frame.setFrameShadow(QFrame.Raised)
        self.horizontalLayout_2 = QHBoxLayout(self.frame)
        self.horizontalLayout_2.setSpacing(0)
        self.horizontalLayout_2.setObjectName(u"horizontalLayout_2")
        self.horizontalLayout_2.setContentsMargins(0, 0, 0, 0)
        self.frame_3 = QFrame(self.frame)
        self.frame_3.setObjectName(u"frame_3")
        sizePolicy = QSizePolicy(QSizePolicy.Expanding, QSizePolicy.Expanding)
        sizePolicy.setHorizontalStretch(0)
        sizePolicy.setVerticalStretch(0)
        sizePolicy.setHeightForWidth(self.frame_3.sizePolicy().hasHeightForWidth())
        self.frame_3.setSizePolicy(sizePolicy)
        self.frame_3.setFrameShape(QFrame.StyledPanel)
        self.frame_3.setFrameShadow(QFrame.Raised)
        self.horizontalLayout_11 = QHBoxLayout(self.frame_3)
        self.horizontalLayout_11.setSpacing(0)
        self.horizontalLayout_11.setObjectName(u"horizontalLayout_11")
        self.horizontalLayout_11.setContentsMargins(0, 0, 0, 0)
        self.label_3 = QLabel(self.frame_3)
        self.label_3.setObjectName(u"label_3")
        sizePolicy.setHeightForWidth(self.label_3.sizePolicy().hasHeightForWidth())
        self.label_3.setSizePolicy(sizePolicy)
        self.label_3.setStyleSheet(u"image: url(:/newPrefix/MadPlateLogo.jpg);\n"
"background-color: #171516;")
        self.label_3.setPixmap(QPixmap(u":/newPrefix/Users/TOYOTA/Desktop/MadPlateLogo.jpg"))
        self.label_3.setScaledContents(False)

        self.horizontalLayout_11.addWidget(self.label_3)


        self.horizontalLayout_2.addWidget(self.frame_3)


        self.verticalLayout_2.addWidget(self.frame)

        self.stackedWidget.addWidget(self.front_page)
        self.camera_page = QWidget()
        self.camera_page.setObjectName(u"camera_page")
        self.gridLayout = QGridLayout(self.camera_page)
        self.gridLayout.setSpacing(0)
        self.gridLayout.setObjectName(u"gridLayout")
        self.gridLayout.setContentsMargins(0, 0, 0, 0)
        self.camera_frame = QFrame(self.camera_page)
        self.camera_frame.setObjectName(u"camera_frame")
        sizePolicy.setHeightForWidth(self.camera_frame.sizePolicy().hasHeightForWidth())
        self.camera_frame.setSizePolicy(sizePolicy)
        self.camera_frame.setFrameShape(QFrame.StyledPanel)
        self.camera_frame.setFrameShadow(QFrame.Raised)
        self.verticalLayout_4 = QVBoxLayout(self.camera_frame)
        self.verticalLayout_4.setSpacing(0)
        self.verticalLayout_4.setObjectName(u"verticalLayout_4")
        self.verticalLayout_4.setContentsMargins(11, 11, 11, 0)
        self.imgLabel = QLabel(self.camera_frame)
        self.imgLabel.setObjectName(u"imgLabel")
        font = QFont()
        font.setBold(False)
        self.imgLabel.setFont(font)
        self.imgLabel.setFrameShape(QFrame.Box)
        self.imgLabel.setFrameShadow(QFrame.Plain)
        self.imgLabel.setLineWidth(5)
        self.imgLabel.setMidLineWidth(0)

        self.verticalLayout_4.addWidget(self.imgLabel)


        self.gridLayout.addWidget(self.camera_frame, 0, 0, 1, 1)

        self.bottom_frame = QFrame(self.camera_page)
        self.bottom_frame.setObjectName(u"bottom_frame")
        self.bottom_frame.setFrameShape(QFrame.StyledPanel)
        self.bottom_frame.setFrameShadow(QFrame.Raised)
        self.horizontalLayout_5 = QHBoxLayout(self.bottom_frame)
        self.horizontalLayout_5.setSpacing(0)
        self.horizontalLayout_5.setObjectName(u"horizontalLayout_5")
        self.horizontalLayout_5.setContentsMargins(0, 0, 0, 0)
        self.frame_6 = QFrame(self.bottom_frame)
        self.frame_6.setObjectName(u"frame_6")
        self.frame_6.setFrameShape(QFrame.StyledPanel)
        self.frame_6.setFrameShadow(QFrame.Raised)
        self.horizontalLayout_4 = QHBoxLayout(self.frame_6)
        self.horizontalLayout_4.setSpacing(0)
        self.horizontalLayout_4.setObjectName(u"horizontalLayout_4")
        self.horizontalLayout_4.setContentsMargins(-1, 0, -1, 0)
        self.btn_capture = QPushButton(self.frame_6)
        self.btn_capture.setObjectName(u"btn_capture")
        font1 = QFont()
        font1.setPointSize(10)
        font1.setBold(True)
        self.btn_capture.setFont(font1)
        self.btn_capture.setCursor(QCursor(Qt.PointingHandCursor))

        self.horizontalLayout_4.addWidget(self.btn_capture)


        self.horizontalLayout_5.addWidget(self.frame_6)

        self.frame_5 = QFrame(self.bottom_frame)
        self.frame_5.setObjectName(u"frame_5")
        self.frame_5.setFrameShape(QFrame.StyledPanel)
        self.frame_5.setFrameShadow(QFrame.Raised)
        self.horizontalLayout_3 = QHBoxLayout(self.frame_5)
        self.horizontalLayout_3.setSpacing(0)
        self.horizontalLayout_3.setObjectName(u"horizontalLayout_3")
        self.horizontalLayout_3.setContentsMargins(11, 0, 11, 0)
        self.label = QLabel(self.frame_5)
        self.label.setObjectName(u"label")
        font2 = QFont()
        font2.setFamilies([u"Arial Black"])
        font2.setPointSize(8)
        font2.setBold(True)
        self.label.setFont(font2)

        self.horizontalLayout_3.addWidget(self.label, 0, Qt.AlignRight)

        self.cb_timer = QComboBox(self.frame_5)
        self.cb_timer.addItem("")
        self.cb_timer.addItem("")
        self.cb_timer.addItem("")
        self.cb_timer.setObjectName(u"cb_timer")
        self.cb_timer.setCursor(QCursor(Qt.PointingHandCursor))

        self.horizontalLayout_3.addWidget(self.cb_timer)


        self.horizontalLayout_5.addWidget(self.frame_5)

        self.frame_8 = QFrame(self.bottom_frame)
        self.frame_8.setObjectName(u"frame_8")
        self.frame_8.setFrameShape(QFrame.StyledPanel)
        self.frame_8.setFrameShadow(QFrame.Raised)
        self.horizontalLayout_6 = QHBoxLayout(self.frame_8)
        self.horizontalLayout_6.setSpacing(0)
        self.horizontalLayout_6.setObjectName(u"horizontalLayout_6")
        self.horizontalLayout_6.setContentsMargins(-1, 0, -1, 0)
        self.label_2 = QLabel(self.frame_8)
        self.label_2.setObjectName(u"label_2")
        font3 = QFont()
        font3.setFamilies([u"Arial Black"])
        font3.setBold(True)
        self.label_2.setFont(font3)

        self.horizontalLayout_6.addWidget(self.label_2, 0, Qt.AlignRight)

        self.lbl_time_count = QLabel(self.frame_8)
        self.lbl_time_count.setObjectName(u"lbl_time_count")
        sizePolicy1 = QSizePolicy(QSizePolicy.Preferred, QSizePolicy.Preferred)
        sizePolicy1.setHorizontalStretch(0)
        sizePolicy1.setVerticalStretch(0)
        sizePolicy1.setHeightForWidth(self.lbl_time_count.sizePolicy().hasHeightForWidth())
        self.lbl_time_count.setSizePolicy(sizePolicy1)
        font4 = QFont()
        font4.setFamilies([u"Arial Black"])
        font4.setPointSize(30)
        font4.setBold(True)
        self.lbl_time_count.setFont(font4)

        self.horizontalLayout_6.addWidget(self.lbl_time_count, 0, Qt.AlignHCenter)


        self.horizontalLayout_5.addWidget(self.frame_8)


        self.gridLayout.addWidget(self.bottom_frame, 1, 0, 1, 1, Qt.AlignBottom)

        self.stackedWidget.addWidget(self.camera_page)
        self.preview_page = QWidget()
        self.preview_page.setObjectName(u"preview_page")
        self.verticalLayout_3 = QVBoxLayout(self.preview_page)
        self.verticalLayout_3.setSpacing(0)
        self.verticalLayout_3.setObjectName(u"verticalLayout_3")
        self.verticalLayout_3.setContentsMargins(0, 0, 0, 0)
        self.frame_9 = QFrame(self.preview_page)
        self.frame_9.setObjectName(u"frame_9")
        sizePolicy.setHeightForWidth(self.frame_9.sizePolicy().hasHeightForWidth())
        self.frame_9.setSizePolicy(sizePolicy)
        self.frame_9.setFrameShape(QFrame.StyledPanel)
        self.frame_9.setFrameShadow(QFrame.Raised)
        self.verticalLayout_6 = QVBoxLayout(self.frame_9)
        self.verticalLayout_6.setObjectName(u"verticalLayout_6")
        self.lbl_image_preview = QLabel(self.frame_9)
        self.lbl_image_preview.setObjectName(u"lbl_image_preview")
        sizePolicy.setHeightForWidth(self.lbl_image_preview.sizePolicy().hasHeightForWidth())
        self.lbl_image_preview.setSizePolicy(sizePolicy)
        self.lbl_image_preview.setFrameShape(QFrame.Box)
        self.lbl_image_preview.setLineWidth(5)

        self.verticalLayout_6.addWidget(self.lbl_image_preview)


        self.verticalLayout_3.addWidget(self.frame_9)

        self.frame_10 = QFrame(self.preview_page)
        self.frame_10.setObjectName(u"frame_10")
        self.frame_10.setFrameShape(QFrame.StyledPanel)
        self.frame_10.setFrameShadow(QFrame.Raised)
        self.horizontalLayout_7 = QHBoxLayout(self.frame_10)
        self.horizontalLayout_7.setSpacing(0)
        self.horizontalLayout_7.setObjectName(u"horizontalLayout_7")
        self.horizontalLayout_7.setContentsMargins(0, 0, 0, 11)
        self.frame_11 = QFrame(self.frame_10)
        self.frame_11.setObjectName(u"frame_11")
        self.frame_11.setFrameShape(QFrame.StyledPanel)
        self.frame_11.setFrameShadow(QFrame.Raised)
        self.horizontalLayout_8 = QHBoxLayout(self.frame_11)
        self.horizontalLayout_8.setSpacing(0)
        self.horizontalLayout_8.setObjectName(u"horizontalLayout_8")
        self.horizontalLayout_8.setContentsMargins(0, 0, 0, 0)

        self.horizontalLayout_7.addWidget(self.frame_11)

        self.frame_12 = QFrame(self.frame_10)
        self.frame_12.setObjectName(u"frame_12")
        self.frame_12.setFrameShape(QFrame.StyledPanel)
        self.frame_12.setFrameShadow(QFrame.Raised)
        self.horizontalLayout_10 = QHBoxLayout(self.frame_12)
        self.horizontalLayout_10.setSpacing(0)
        self.horizontalLayout_10.setObjectName(u"horizontalLayout_10")
        self.horizontalLayout_10.setContentsMargins(-1, 0, -1, 0)
        self.btn_saveIMG = QPushButton(self.frame_12)
        self.btn_saveIMG.setObjectName(u"btn_saveIMG")
        self.btn_saveIMG.setFont(font1)

        self.horizontalLayout_10.addWidget(self.btn_saveIMG)


        self.horizontalLayout_7.addWidget(self.frame_12)

        self.frame_13 = QFrame(self.frame_10)
        self.frame_13.setObjectName(u"frame_13")
        self.frame_13.setFrameShape(QFrame.StyledPanel)
        self.frame_13.setFrameShadow(QFrame.Raised)
        self.horizontalLayout_9 = QHBoxLayout(self.frame_13)
        self.horizontalLayout_9.setSpacing(0)
        self.horizontalLayout_9.setObjectName(u"horizontalLayout_9")
        self.horizontalLayout_9.setContentsMargins(-1, 0, -1, 0)
        self.btn_retake = QPushButton(self.frame_13)
        self.btn_retake.setObjectName(u"btn_retake")
        self.btn_retake.setFont(font1)

        self.horizontalLayout_9.addWidget(self.btn_retake)


        self.horizontalLayout_7.addWidget(self.frame_13)

        self.frame_14 = QFrame(self.frame_10)
        self.frame_14.setObjectName(u"frame_14")
        self.frame_14.setFrameShape(QFrame.StyledPanel)
        self.frame_14.setFrameShadow(QFrame.Raised)

        self.horizontalLayout_7.addWidget(self.frame_14)


        self.verticalLayout_3.addWidget(self.frame_10)

        self.stackedWidget.addWidget(self.preview_page)

        self.horizontalLayout.addWidget(self.stackedWidget)

        MainWindow.setCentralWidget(self.centralwidget)

        self.retranslateUi(MainWindow)

        self.stackedWidget.setCurrentIndex(0)


        QMetaObject.connectSlotsByName(MainWindow)
    # setupUi

    def retranslateUi(self, MainWindow):
        MainWindow.setWindowTitle(QCoreApplication.translate("MainWindow", u"MainWindow", None))
        self.label_3.setText("")
        self.imgLabel.setText("")
        self.btn_capture.setText(QCoreApplication.translate("MainWindow", u"CAPTURE", None))
        self.label.setText(QCoreApplication.translate("MainWindow", u"TIMER COUNT:", None))
        self.cb_timer.setItemText(0, QCoreApplication.translate("MainWindow", u"1", None))
        self.cb_timer.setItemText(1, QCoreApplication.translate("MainWindow", u"2", None))
        self.cb_timer.setItemText(2, QCoreApplication.translate("MainWindow", u"3", None))

        self.label_2.setText(QCoreApplication.translate("MainWindow", u"TIMER COUNT :", None))
        self.lbl_time_count.setText(QCoreApplication.translate("MainWindow", u"1", None))
        self.lbl_image_preview.setText("")
        self.btn_saveIMG.setText(QCoreApplication.translate("MainWindow", u"SAVE IMAGE", None))
        self.btn_retake.setText(QCoreApplication.translate("MainWindow", u"RETAKE", None))
    # retranslateUi

