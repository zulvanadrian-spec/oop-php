<?php

class Event
{
    public string $idEvent;
    public string $nameEvent;
}

class Mahasiswa
{
    public string $name;
    public string $nim;
    public string $prodi;
    public string $semester;
}

class Panitia
{
    public string $namePanitia;
    public string $upEvent;
}

class Admin
{
    public string $nameAdmin;
    public bool $perizinan = false;

    public function persetujuan(): string
    {
        if ($this->perizinan === true) {
            return "Admin memberi izin";
        }
        return "Admin menolak pendaftaran";
    }
}

class Info
{
    public function tampil(Mahasiswa $mhs, Event $event, Admin $admin): string
    {
        return "{$mhs->name} mengikuti kepanitiaan {$event->nameEvent}. "
             . $admin->persetujuan();
    }
}

$event = new Event();
$mhs   = new Mahasiswa();
$admin = new Admin();
$info  = new Info();

$event->nameEvent = "LDKK";
$mhs->name        = "Andi";
$admin->perizinan = true;

echo $info->tampil($mhs, $event, $admin);