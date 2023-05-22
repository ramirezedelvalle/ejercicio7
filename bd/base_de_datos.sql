CREATE TABLE alumnos (
	alu_cod INTEGER NOT NULL,
	alu_nom VARCHAR(100) NOT NULL,
	alu_ape VARCHAR(100) NOT NULL,
	alu_tel INTEGER,
	alu_dia INTEGER CHECK (alu_dia >= 1 AND alu_dia <= 31),
	alu_mes INTEGER CHECK (alu_mes >= 1 AND alu_mes <= 12),
	alu_fech INTEGER CHECK (alu_fech >= 1900 AND alu_fech <= 2023),
	alu_mail VARCHAR(100)
);
