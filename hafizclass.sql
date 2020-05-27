/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     27/05/20 23:43:16                            */
/*==============================================================*/


drop table if exists HARIAN;

drop table if exists KOMENTAR;

drop table if exists PENGUJI;

drop table if exists PROGRESS;

drop table if exists SANTRI;

drop table if exists TARGET;

drop table if exists USTADZ;

/*==============================================================*/
/* Table: HARIAN                                                */
/*==============================================================*/
create table HARIAN
(
   ID_HARIAN            int not null,
   ID_PROGRESS          int not null,
   STATUS_HARIAN        varchar(25),
   primary key (ID_HARIAN)
);

/*==============================================================*/
/* Table: KOMENTAR                                              */
/*==============================================================*/
create table KOMENTAR
(
   ID_KOMEN             int not null,
   ID_PROGRESS          int not null,
   STATUS_KOMEN         varchar(20),
   NAMA_KOMEN           varchar(35),
   ISI_KOMEN            text,
   primary key (ID_KOMEN)
);

/*==============================================================*/
/* Table: PENGUJI                                               */
/*==============================================================*/
create table PENGUJI
(
   ID_PENGUJI           int not null,
   ID_USTADZ            int not null,
   ID_SANTRI            int not null,
   KETERANGAN_MENGUJI   varchar(25),
   primary key (ID_PENGUJI)
);

/*==============================================================*/
/* Table: PROGRESS                                              */
/*==============================================================*/
create table PROGRESS
(
   ID_PROGRESS          int not null,
   ID_SANTRI            int not null,
   ID_USTADZ            int not null,
   JUDUL_PROGRESS       varchar(50),
   AUDIO                varchar(50),
   TARGET               varchar(20),
   primary key (ID_PROGRESS)
);

/*==============================================================*/
/* Table: SANTRI                                                */
/*==============================================================*/
create table SANTRI
(
   ID_SANTRI            int not null,
   EMAIL_SANTRI         varchar(50),
   PASSWORD_SANTRI      varchar(25),
   NAMA_SANTRI          varchar(50),
   JK_SANTRI            varchar(20),
   TELEPON_SANTRI       int,
   FOTO_SANTRI          varchar(50),
   primary key (ID_SANTRI)
);

/*==============================================================*/
/* Table: TARGET                                                */
/*==============================================================*/
create table TARGET
(
   ID_TARGET            int not null,
   ID_PROGRESS          int not null,
   STATUS_TARGET        varchar(25),
   TANGGAL_UPLOAD       date,
   BATAS_UPLOAD         date,
   primary key (ID_TARGET)
);

/*==============================================================*/
/* Table: USTADZ                                                */
/*==============================================================*/
create table USTADZ
(
   ID_USTADZ            int not null,
   EMAIL_USTADZ         varchar(50),
   PASSWORD_USTADZ      varchar(25),
   NAMA_USTADZ          varchar(50),
   JK_USTADZ            varchar(20),
   TELEPON_USTADZ       int,
   FOTO_USTADZ          varchar(50),
   primary key (ID_USTADZ)
);

alter table HARIAN add constraint FK_MEMILIKI_HARIAN foreign key (ID_PROGRESS)
      references PROGRESS (ID_PROGRESS) on delete restrict on update restrict;

alter table KOMENTAR add constraint FK_MEMBERIKAN foreign key (ID_PROGRESS)
      references PROGRESS (ID_PROGRESS) on delete restrict on update restrict;

alter table PENGUJI add constraint FK_DIUJI foreign key (ID_SANTRI)
      references SANTRI (ID_SANTRI) on delete restrict on update restrict;

alter table PENGUJI add constraint FK_MENGUJI foreign key (ID_USTADZ)
      references USTADZ (ID_USTADZ) on delete restrict on update restrict;

alter table PROGRESS add constraint FK_MEMBERI foreign key (ID_USTADZ)
      references USTADZ (ID_USTADZ) on delete restrict on update restrict;

alter table PROGRESS add constraint FK_TUGAS_SANTRI foreign key (ID_SANTRI)
      references SANTRI (ID_SANTRI) on delete restrict on update restrict;

alter table TARGET add constraint FK_MEMILIKI_TARGET foreign key (ID_PROGRESS)
      references PROGRESS (ID_PROGRESS) on delete restrict on update restrict;

