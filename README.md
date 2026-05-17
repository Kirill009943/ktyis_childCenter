# ktyis_childCenter
project of demo exam in KTUIS

Добавить администратора в бд.

INSERT INTO users (login, password_hash, full_name, phone, email, role)
VALUES (
  'Admin',
  '$2y$12$sT0hsTOkfdx1lZROgxaY/upIGo2k8aCTAVCVO8GXmvQ4RRQyM4vpm',
  'Администратор',
  '8(000)000-00-00',
  'admin@childcenter',
  'admin'
)
ON DUPLICATE KEY UPDATE login = login;
