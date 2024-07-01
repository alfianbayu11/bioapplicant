from fastapi import FastAPI, HTTPException, Depends
from sqlalchemy.orm import Session
from sqlalchemy import create_engine, Column, Integer, String, ForeignKey
from sqlalchemy.ext.declarative import declarative_base
from sqlalchemy.orm import sessionmaker, relationship
from pydantic import BaseModel
from typing import List
from fastapi.middleware.cors import CORSMiddleware

# Buat aplikasi FastAPI
app = FastAPI()
 
app.add_middleware(
    CORSMiddleware,
    allow_origins=["*"],
    allow_credentials=True,
    allow_methods=["*"],
    allow_headers=["*"]
)

# Konfigurasi database menggunakan SQLAlchemy
SQLALCHEMY_DATABASE_URL = "sqlite:///./biodatas.db"
engine = create_engine(SQLALCHEMY_DATABASE_URL)
SessionLocal = sessionmaker(autocommit=False, autoflush=False, bind=engine)
Base = declarative_base()

# Definisi Model menggunakan SQLAlchemy
class Biodata(Base):
    __tablename__ = "biodata"
    id = Column(Integer, primary_key=True, index=True)
    posisi_yang_dilamar = Column(String(100))
    nama = Column(String(100))
    noKtp = Column(String(20))
    tempatLahir = Column(String(100))
    tanggalLahir = Column(String(10))
    jenisKelamin = Column(String(20))
    agama = Column(String(50))
    golongan_darah = Column(String(10))
    status = Column(String(20))
    alamatKtp = Column(String)
    alamatTinggal = Column(String)
    email = Column(String(100))
    noTelp = Column(String(20))
    orangTerdekat = Column(String(100))
    noHpOrangTerdekat = Column(String(20))
    skills = Column(String)
    placement = Column(String(10))
    expected_salary = Column(String(20))

    educations = relationship("Education", back_populates="biodata", cascade="all, delete-orphan")
    trainings = relationship("Training", back_populates="biodata", cascade="all, delete-orphan")
    work_experiences = relationship("WorkExperience", back_populates="biodata", cascade="all, delete-orphan")

class Education(Base):
    __tablename__ = "education"
    id = Column(Integer, primary_key=True, index=True)
    biodata_id = Column(Integer, ForeignKey("biodata.id"))
    jenjang_pendidikan = Column(String(100))
    institusi = Column(String(100))
    jurusan = Column(String(100))
    tahun_lulus = Column(String(10))
    ipk = Column(String(10))

    biodata = relationship("Biodata", back_populates="educations")

class Training(Base):
    __tablename__ = "training"
    id = Column(Integer, primary_key=True, index=True)
    biodata_id = Column(Integer, ForeignKey("biodata.id"))
    nama_kursus = Column(String(100))
    sertifikat = Column(String(100))
    tahun = Column(String(10))

    biodata = relationship("Biodata", back_populates="trainings")

class WorkExperience(Base):
    __tablename__ = "work_experience"
    id = Column(Integer, primary_key=True, index=True)
    biodata_id = Column(Integer, ForeignKey("biodata.id"))
    nama_perusahaan = Column(String(100))
    posisi_terakhir = Column(String(100))
    pendapatan_terakhir = Column(String(100))
    tahun = Column(String(10))

    biodata = relationship("Biodata", back_populates="work_experiences")

# Buat tabel-tabel dalam database jika belum ada
Base.metadata.create_all(bind=engine)

# Pydantic model untuk data Biodata
class EducationBase(BaseModel):
    jenjang_pendidikan: str
    institusi: str
    jurusan: str
    tahun_lulus: str
    ipk: str

class EducationCreate(EducationBase):
    pass

class EducationSchema(EducationBase):
    id: int
    biodata_id: int

    class Config:
        orm_mode = True

class TrainingBase(BaseModel):
    nama_kursus: str
    sertifikat: str
    tahun: str

class TrainingCreate(TrainingBase):
    pass

class TrainingSchema(TrainingBase):
    id: int
    biodata_id: int

    class Config:
        orm_mode = True

class WorkExperienceBase(BaseModel):
    nama_perusahaan: str
    posisi_terakhir: str
    pendapatan_terakhir: str
    tahun: str

class WorkExperienceCreate(WorkExperienceBase):
    pass

class WorkExperienceSchema(WorkExperienceBase):
    id: int
    biodata_id: int

    class Config:
        orm_mode = True

class BiodataCreate(BaseModel):
    posisi_yang_dilamar: str
    nama: str
    noKtp: str
    tempatLahir: str
    tanggalLahir: str
    jenisKelamin: str
    agama: str
    golongan_darah: str
    status: str
    alamatKtp: str
    alamatTinggal: str
    email: str
    noTelp: str
    orangTerdekat: str
    noHpOrangTerdekat: str
    skills: str
    placement: str
    expected_salary: str
    educations: List[EducationBase] = []
    trainings: List[TrainingBase] = []
    work_experiences: List[WorkExperienceBase] = []

class BiodataDetail(BiodataCreate):
    id: int
    educations: List[EducationSchema] = []
    trainings: List[TrainingSchema] = []
    work_experiences: List[WorkExperienceSchema] = []

# Dependency untuk mendapatkan session database
def get_db():
    db = SessionLocal()
    try:
        yield db
    finally:
        db.close()

# Endpoint untuk menyimpan biodata beserta pendidikan, pelatihan, dan pengalaman kerja
@app.post('/api/biodata/')
def save_biodata(biodata: BiodataCreate, db: Session = Depends(get_db)):
    # Simpan data biodata
    biodata_db = Biodata(
        posisi_yang_dilamar=biodata.posisi_yang_dilamar,
        nama=biodata.nama,
        noKtp=biodata.noKtp,
        tempatLahir=biodata.tempatLahir,
        tanggalLahir=biodata.tanggalLahir,
        jenisKelamin=biodata.jenisKelamin,
        agama=biodata.agama,
        golongan_darah=biodata.golongan_darah,
        status=biodata.status,
        alamatKtp=biodata.alamatKtp,
        alamatTinggal=biodata.alamatTinggal,
        email=biodata.email,
        noTelp=biodata.noTelp,
        orangTerdekat=biodata.orangTerdekat,
        noHpOrangTerdekat=biodata.noHpOrangTerdekat,
        skills=biodata.skills,
        placement=biodata.placement,
        expected_salary =biodata.expected_salary,
    )
    db.add(biodata_db)
    db.commit()
    db.refresh(biodata_db)
    
    # Simpan data pendidikan
    for education_data in biodata.educations:
        education = Education(
            jenjang_pendidikan=education_data.jenjang_pendidikan,
            institusi=education_data.institusi,
            jurusan=education_data.jurusan,
            tahun_lulus=education_data.tahun_lulus,
            ipk=education_data.ipk,
            biodata_id=biodata_db.id,
        )
        db.add(education)
    
    # Simpan data pelatihan
    for training_data in biodata.trainings:
        training = Training(
            nama_kursus=training_data.nama_kursus,
            sertifikat=training_data.sertifikat,
            tahun=training_data.tahun,
            biodata_id=biodata_db.id,
        )
        db.add(training)
    
    # Simpan data riwayat pekerjaan
    for experience_data in biodata.work_experiences:
        work_experience = WorkExperience(
            nama_perusahaan=experience_data.nama_perusahaan,
            posisi_terakhir=experience_data.posisi_terakhir,
            pendapatan_terakhir=experience_data.pendapatan_terakhir,
            tahun=experience_data.tahun,
            biodata_id=biodata_db.id,
        )
        db.add(work_experience)
    
    db.commit()
    return {"message": "Biodata berhasil disimpan!"}

# Endpoint untuk mengambil detail biodata berdasarkan ID
@app.get('/api/biodata/{biodata_id}', response_model=BiodataDetail)
def get_biodata(biodata_id: int, db: Session = Depends(get_db)):
    biodata = db.query(Biodata).filter(Biodata.id == biodata_id).first()
    if biodata is None:
        raise HTTPException(status_code=404, detail="Biodata not found")
    
    return biodata

# Endpoint untuk menghapus biodata berdasarkan ID
@app.delete('/api/biodata/{biodata_id}')
def delete_biodata(biodata_id: int, db: Session = Depends(get_db)):
    biodata = db.query(Biodata).filter(Biodata.id == biodata_id).first()
    if biodata is None:
        raise HTTPException(status_code=404, detail="Biodata not found")
    
    db.delete(biodata)
    db.commit()
    return {"message": "Biodata berhasil dihapus!"}


# Endpoint untuk mengambil semua data biodata
@app.get('/api/biodata/', response_model=List[BiodataDetail])
def get_all_biodata(db: Session = Depends(get_db)):
    return db.query(Biodata).all()

# Endpoint untuk mengedit biodata beserta pendidikan, pelatihan, dan pengalaman kerja berdasarkan ID
@app.put('/api/biodata/{biodata_id}', response_model=BiodataDetail)
def update_biodata(biodata_id: int, biodata_update: BiodataCreate, db: Session = Depends(get_db)):
    # Periksa apakah biodata dengan ID yang diberikan ada dalam database
    biodata_db = db.query(Biodata).filter(Biodata.id == biodata_id).first()
    if biodata_db is None:
        raise HTTPException(status_code=404, detail="Biodata not found")

    # Update data biodata
    biodata_db.posisi_yang_dilamar = biodata_update.posisi_yang_dilamar
    biodata_db.nama = biodata_update.nama
    biodata_db.noKtp = biodata_update.noKtp
    biodata_db.tempatLahir = biodata_update.tempatLahir
    biodata_db.tanggalLahir = biodata_update.tanggalLahir
    biodata_db.jenisKelamin = biodata_update.jenisKelamin
    biodata_db.agama = biodata_update.agama
    biodata_db.golongan_darah = biodata_update.golongan_darah
    biodata_db.status = biodata_update.status
    biodata_db.alamatKtp = biodata_update.alamatKtp
    biodata_db.alamatTinggal = biodata_update.alamatTinggal
    biodata_db.email = biodata_update.email
    biodata_db.noTelp = biodata_update.noTelp
    biodata_db.orangTerdekat = biodata_update.orangTerdekat
    biodata_db.noHpOrangTerdekat = biodata_update.noHpOrangTerdekat
    biodata_db.skills = biodata_update.skills
    biodata_db.placement = biodata_update.placement
    biodata_db.expected_salary = biodata_update.expected_salary

    # Hapus semua pendidikan, pelatihan, dan pengalaman kerja yang terkait dengan biodata ini
    db.query(Education).filter(Education.biodata_id == biodata_id).delete()
    db.query(Training).filter(Training.biodata_id == biodata_id).delete()
    db.query(WorkExperience).filter(WorkExperience.biodata_id == biodata_id).delete()

    # Simpan data pendidikan yang baru
    for education_data in biodata_update.educations:
        education = Education(
            jenjang_pendidikan=education_data.jenjang_pendidikan,
            institusi=education_data.institusi,
            jurusan=education_data.jurusan,
            tahun_lulus=education_data.tahun_lulus,
            ipk=education_data.ipk,
            biodata_id=biodata_id,
        )
        db.add(education)

    # Simpan data pelatihan yang baru
    for training_data in biodata_update.trainings:
        training = Training(
            nama_kursus=training_data.nama_kursus,
            sertifikat=training_data.sertifikat,
            tahun=training_data.tahun,
            biodata_id=biodata_id,
        )
        db.add(training)

    # Simpan data pengalaman kerja yang baru
    for experience_data in biodata_update.work_experiences:
        work_experience = WorkExperience(
            nama_perusahaan=experience_data.nama_perusahaan,
            posisi_terakhir=experience_data.posisi_terakhir,
            pendapatan_terakhir=experience_data.pendapatan_terakhir,
            tahun=experience_data.tahun,
            biodata_id=biodata_id,
        )
        db.add(work_experience)

    db.commit()
    db.refresh(biodata_db)

    return biodata_db

