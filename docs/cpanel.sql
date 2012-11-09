-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 04-08-2012 a las 02:26:56
-- Versión del servidor: 5.5.24
-- Versión de PHP: 5.3.10-1ubuntu3.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `Cpanel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aplicaciones`
--

CREATE TABLE IF NOT EXISTS `aplicaciones` (
  `IDApp` bigint(11) NOT NULL AUTO_INCREMENT,
  `CodigoApp` varchar(15) DEFAULT NULL,
  `NombreApp` varchar(100) DEFAULT NULL,
  `Descripcion` varchar(100) DEFAULT NULL,
  `Observaciones` text,
  `PrimaryKeyMD5` varchar(100) DEFAULT NULL,
  `EsPredeterminado` tinyint(1) DEFAULT '0' COMMENT 'Abstract,ValoresSN,IDTipo',
  `Revisado` tinyint(1) DEFAULT '0' COMMENT 'Abstract,ValoresSN,IDTipo',
  `Publicar` tinyint(1) DEFAULT '0' COMMENT 'Abstract,ValoresSN,IDTipo',
  `VigenteDesde` datetime NOT NULL,
  `VigenteHasta` datetime NOT NULL,
  `CreatedBy` int(4) NOT NULL,
  `CreatedAt` datetime NOT NULL,
  `ModifiedBy` int(4) NOT NULL,
  `ModifiedAt` datetime NOT NULL,
  `Deleted` tinyint(1) DEFAULT '0' COMMENT 'Abstract,ValoresSN,IDTipo',
  `DeletedBy` int(4) DEFAULT NULL,
  `DeletedAt` datetime DEFAULT NULL,
  `Privacidad` tinyint(1) DEFAULT '0' COMMENT 'Abstract,ValoresPrivacidad,IDTipo',
  `Orden` bigint(11) DEFAULT NULL,
  `Imagenes` varchar(255) DEFAULT NULL,
  `FechaPublicacion` datetime DEFAULT NULL,
  `UrlAmigable` varchar(255) DEFAULT NULL,
  `NumeroVisitas` int(11) DEFAULT NULL,
  `MetatagTitle` varchar(255) DEFAULT NULL,
  `MetatagKeywords` varchar(255) DEFAULT NULL,
  `MetatagDescription` varchar(255) DEFAULT NULL,
  `MetatagTitleSimple` tinyint(1) DEFAULT '0' COMMENT 'Abstract,ValoresSN,IDTipo',
  `MetatagTitlePosicion` tinyint(1) DEFAULT '0' COMMENT 'Abstract,ValoresDchIzq,IDTipo',
  `MostrarEnMapaWeb` tinyint(1) DEFAULT '0' COMMENT 'Abstract,ValoresSN,IDTipo',
  `ImportanciaMapaWeb` varchar(5) DEFAULT NULL,
  `ChangeFreqMapaWeb` varchar(25) DEFAULT '0' COMMENT 'Abstract,ValoresChangeFreq,IDTipo',
  PRIMARY KEY (`IDApp`),
  UNIQUE KEY `CodigoApp` (`CodigoApp`),
  UNIQUE KEY `PrimaryKeyMD5` (`PrimaryKeyMD5`),
  KEY `EsPredeterminado` (`EsPredeterminado`),
  KEY `Revisado` (`Revisado`),
  KEY `Publicar` (`Publicar`),
  KEY `Deleted` (`Deleted`),
  KEY `Privacidad` (`Privacidad`),
  KEY `Orden` (`Orden`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funcionalidades`
--

CREATE TABLE IF NOT EXISTS `funcionalidades` (
  `IDFuncionalidad` bigint(11) NOT NULL AUTO_INCREMENT,
  `IDOpcion` bigint(11) DEFAULT NULL COMMENT 'Cpanel,Opciones,IDOpcion',
  `Funcionalidades` varchar(255) DEFAULT NULL,
  `Observaciones` text,
  `PrimaryKeyMD5` varchar(100) DEFAULT NULL,
  `EsPredeterminado` tinyint(1) DEFAULT '0' COMMENT 'Abstract,ValoresSN,IDTipo',
  `Revisado` tinyint(1) DEFAULT '0' COMMENT 'Abstract,ValoresSN,IDTipo',
  `Publicar` tinyint(1) DEFAULT '0' COMMENT 'Abstract,ValoresSN,IDTipo',
  `VigenteDesde` datetime NOT NULL,
  `VigenteHasta` datetime NOT NULL,
  `CreatedBy` int(4) NOT NULL,
  `CreatedAt` datetime NOT NULL,
  `ModifiedBy` int(4) NOT NULL,
  `ModifiedAt` datetime NOT NULL,
  `Deleted` tinyint(1) DEFAULT '0' COMMENT 'Abstract,ValoresSN,IDTipo',
  `DeletedBy` int(4) DEFAULT NULL,
  `DeletedAt` datetime DEFAULT NULL,
  `Privacidad` tinyint(1) DEFAULT '0' COMMENT 'Abstract,ValoresPrivacidad,IDTipo',
  `Orden` bigint(11) DEFAULT NULL,
  `Imagenes` varchar(255) DEFAULT NULL,
  `FechaPublicacion` datetime DEFAULT NULL,
  `UrlAmigable` varchar(255) DEFAULT NULL,
  `NumeroVisitas` int(11) DEFAULT NULL,
  `MetatagTitle` varchar(255) DEFAULT NULL,
  `MetatagKeywords` varchar(255) DEFAULT NULL,
  `MetatagDescription` varchar(255) DEFAULT NULL,
  `MetatagTitleSimple` tinyint(1) DEFAULT '0' COMMENT 'Abstract,ValoresSN,IDTipo',
  `MetatagTitlePosicion` tinyint(1) DEFAULT '0' COMMENT 'Abstract,ValoresDchIzq,IDTipo',
  `MostrarEnMapaWeb` tinyint(1) DEFAULT '0' COMMENT 'Abstract,ValoresSN,IDTipo',
  `ImportanciaMapaWeb` varchar(5) DEFAULT NULL,
  `ChangeFreqMapaWeb` varchar(25) DEFAULT '0' COMMENT 'Abstract,ValoresChangeFreq,IDTipo',
  PRIMARY KEY (`IDFuncionalidad`),
  UNIQUE KEY `PrimaryKeyMD5` (`PrimaryKeyMD5`),
  KEY `IDOpcion` (`IDOpcion`),
  KEY `EsPredeterminado` (`EsPredeterminado`),
  KEY `Revisado` (`Revisado`),
  KEY `Publicar` (`Publicar`),
  KEY `Deleted` (`Deleted`),
  KEY `Privacidad` (`Privacidad`),
  KEY `Orden` (`Orden`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opciones`
--

CREATE TABLE IF NOT EXISTS `opciones` (
  `IDOpcion` bigint(11) NOT NULL AUTO_INCREMENT,
  `CodigoApp` bigint(11) DEFAULT NULL COMMENT 'Cpanel,Aplicaciones,CodigoApp',
  `Nivel` int(4) DEFAULT NULL,
  `PerteneceA` int(4) DEFAULT NULL,
  `Titulo` varchar(100) DEFAULT NULL,
  `Descripcion` varchar(100) DEFAULT NULL,
  `Observaciones` text,
  `PrimaryKeyMD5` varchar(100) DEFAULT NULL,
  `EsPredeterminado` tinyint(1) DEFAULT '0' COMMENT 'Abstract,ValoresSN,IDTipo',
  `Revisado` tinyint(1) DEFAULT '0' COMMENT 'Abstract,ValoresSN,IDTipo',
  `Publicar` tinyint(1) DEFAULT '0' COMMENT 'Abstract,ValoresSN,IDTipo',
  `VigenteDesde` datetime NOT NULL,
  `VigenteHasta` datetime NOT NULL,
  `CreatedBy` int(4) NOT NULL,
  `CreatedAt` datetime NOT NULL,
  `ModifiedBy` int(4) NOT NULL,
  `ModifiedAt` datetime NOT NULL,
  `Deleted` tinyint(1) DEFAULT '0' COMMENT 'Abstract,ValoresSN,IDTipo',
  `DeletedBy` int(4) DEFAULT NULL,
  `DeletedAt` datetime DEFAULT NULL,
  `Privacidad` tinyint(1) DEFAULT '0' COMMENT 'Abstract,ValoresPrivacidad,IDTipo',
  `Orden` bigint(11) DEFAULT NULL,
  `Imagenes` varchar(255) DEFAULT NULL,
  `FechaPublicacion` datetime DEFAULT NULL,
  `UrlAmigable` varchar(255) DEFAULT NULL,
  `NumeroVisitas` int(11) DEFAULT NULL,
  `MetatagTitle` varchar(255) DEFAULT NULL,
  `MetatagKeywords` varchar(255) DEFAULT NULL,
  `MetatagDescription` varchar(255) DEFAULT NULL,
  `MetatagTitleSimple` tinyint(1) DEFAULT '0' COMMENT 'Abstract,ValoresSN,IDTipo',
  `MetatagTitlePosicion` tinyint(1) DEFAULT '0' COMMENT 'Abstract,ValoresDchIzq,IDTipo',
  `MostrarEnMapaWeb` tinyint(1) DEFAULT '0' COMMENT 'Abstract,ValoresSN,IDTipo',
  `ImportanciaMapaWeb` varchar(5) DEFAULT NULL,
  `ChangeFreqMapaWeb` varchar(25) DEFAULT '0' COMMENT 'Abstract,ValoresChangeFreq,IDTipo',
  PRIMARY KEY (`IDOpcion`),
  UNIQUE KEY `PrimaryKeyMD5` (`PrimaryKeyMD5`),
  KEY `CodigoApp` (`CodigoApp`),
  KEY `EsPredeterminado` (`EsPredeterminado`),
  KEY `Revisado` (`Revisado`),
  KEY `Publicar` (`Publicar`),
  KEY `Deleted` (`Deleted`),
  KEY `Privacidad` (`Privacidad`),
  KEY `Orden` (`Orden`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

CREATE TABLE IF NOT EXISTS `perfiles` (
  `IDPerfil` bigint(11) NOT NULL AUTO_INCREMENT,
  `Perfil` varchar(50) DEFAULT NULL,
  `Observaciones` text,
  `PrimaryKeyMD5` varchar(100) DEFAULT NULL,
  `EsPredeterminado` tinyint(1) DEFAULT '0' COMMENT 'Abstract,ValoresSN,IDTipo',
  `Revisado` tinyint(1) DEFAULT '0' COMMENT 'Abstract,ValoresSN,IDTipo',
  `Publicar` tinyint(1) DEFAULT '0' COMMENT 'Abstract,ValoresSN,IDTipo',
  `VigenteDesde` datetime NOT NULL,
  `VigenteHasta` datetime NOT NULL,
  `CreatedBy` int(4) NOT NULL,
  `CreatedAt` datetime NOT NULL,
  `ModifiedBy` int(4) NOT NULL,
  `ModifiedAt` datetime NOT NULL,
  `Deleted` tinyint(1) DEFAULT '0' COMMENT 'Abstract,ValoresSN,IDTipo',
  `DeletedBy` int(4) DEFAULT NULL,
  `DeletedAt` datetime DEFAULT NULL,
  `Privacidad` tinyint(1) DEFAULT '0' COMMENT 'Abstract,ValoresPrivacidad,IDTipo',
  `Orden` bigint(11) DEFAULT NULL,
  `Imagenes` varchar(255) DEFAULT NULL,
  `FechaPublicacion` datetime DEFAULT NULL,
  `UrlAmigable` varchar(255) DEFAULT NULL,
  `NumeroVisitas` int(11) DEFAULT NULL,
  `MetatagTitle` varchar(255) DEFAULT NULL,
  `MetatagKeywords` varchar(255) DEFAULT NULL,
  `MetatagDescription` varchar(255) DEFAULT NULL,
  `MetatagTitleSimple` tinyint(1) DEFAULT '0' COMMENT 'Abstract,ValoresSN,IDTipo',
  `MetatagTitlePosicion` tinyint(1) DEFAULT '0' COMMENT 'Abstract,ValoresDchIzq,IDTipo',
  `MostrarEnMapaWeb` tinyint(1) DEFAULT '0' COMMENT 'Abstract,ValoresSN,IDTipo',
  `ImportanciaMapaWeb` varchar(5) DEFAULT NULL,
  `ChangeFreqMapaWeb` varchar(25) DEFAULT '0' COMMENT 'Abstract,ValoresChangeFreq,IDTipo',
  PRIMARY KEY (`IDPerfil`),
  UNIQUE KEY `PrimaryKeyMD5` (`PrimaryKeyMD5`),
  KEY `EsPredeterminado` (`EsPredeterminado`),
  KEY `Revisado` (`Revisado`),
  KEY `Publicar` (`Publicar`),
  KEY `Deleted` (`Deleted`),
  KEY `Privacidad` (`Privacidad`),
  KEY `Orden` (`Orden`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `perfiles`
--

INSERT INTO `perfiles` (`IDPerfil`, `Perfil`, `Observaciones`, `PrimaryKeyMD5`, `EsPredeterminado`, `Revisado`, `Publicar`, `VigenteDesde`, `VigenteHasta`, `CreatedBy`, `CreatedAt`, `ModifiedBy`, `ModifiedAt`, `Deleted`, `DeletedBy`, `DeletedAt`, `Privacidad`, `Orden`, `Imagenes`, `FechaPublicacion`, `UrlAmigable`, `NumeroVisitas`, `MetatagTitle`, `MetatagKeywords`, `MetatagDescription`, `MetatagTitleSimple`, `MetatagTitlePosicion`, `MostrarEnMapaWeb`, `ImportanciaMapaWeb`, `ChangeFreqMapaWeb`) VALUES
(1, 'SuperAdministrador', NULL, '06735d4e246265dfaf01a565b763d7be', 1, NULL, 1, '2000-01-01 00:00:00', '2020-01-01 00:00:00', 1, '2012-08-02 20:19:35', 1, '2012-08-02 20:19:35', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Administrador', NULL, '2f3fbd4745e6e5c4db1d9aaa08389b1d', 1, NULL, 1, '2000-01-01 00:00:00', '2020-01-01 00:00:00', 1, '2012-08-02 20:19:35', 1, '2012-08-02 20:19:35', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE IF NOT EXISTS `permisos` (
  `IDPermiso` bigint(11) NOT NULL AUTO_INCREMENT,
  `IDPerfil` bigint(11) DEFAULT NULL,
  `IDOpcion` bigint(11) DEFAULT NULL,
  `Permisos` varchar(255) DEFAULT NULL,
  `Observaciones` text,
  `PrimaryKeyMD5` varchar(100) DEFAULT NULL,
  `EsPredeterminado` tinyint(1) DEFAULT '0' COMMENT 'Abstract,ValoresSN,IDTipo',
  `Revisado` tinyint(1) DEFAULT '0' COMMENT 'Abstract,ValoresSN,IDTipo',
  `Publicar` tinyint(1) DEFAULT '0' COMMENT 'Abstract,ValoresSN,IDTipo',
  `VigenteDesde` datetime NOT NULL,
  `VigenteHasta` datetime NOT NULL,
  `CreatedBy` int(4) NOT NULL,
  `CreatedAt` datetime NOT NULL,
  `ModifiedBy` int(4) NOT NULL,
  `ModifiedAt` datetime NOT NULL,
  `Deleted` tinyint(1) DEFAULT '0' COMMENT 'Abstract,ValoresSN,IDTipo',
  `DeletedBy` int(4) DEFAULT NULL,
  `DeletedAt` datetime DEFAULT NULL,
  `Privacidad` tinyint(1) DEFAULT '0' COMMENT 'Abstract,ValoresPrivacidad,IDTipo',
  `Orden` bigint(11) DEFAULT NULL,
  `Imagenes` varchar(255) DEFAULT NULL,
  `FechaPublicacion` datetime DEFAULT NULL,
  `UrlAmigable` varchar(255) DEFAULT NULL,
  `NumeroVisitas` int(11) DEFAULT NULL,
  `MetatagTitle` varchar(255) DEFAULT NULL,
  `MetatagKeywords` varchar(255) DEFAULT NULL,
  `MetatagDescription` varchar(255) DEFAULT NULL,
  `MetatagTitleSimple` tinyint(1) DEFAULT '0' COMMENT 'Abstract,ValoresSN,IDTipo',
  `MetatagTitlePosicion` tinyint(1) DEFAULT '0' COMMENT 'Abstract,ValoresDchIzq,IDTipo',
  `MostrarEnMapaWeb` tinyint(1) DEFAULT '0' COMMENT 'Abstract,ValoresSN,IDTipo',
  `ImportanciaMapaWeb` varchar(5) DEFAULT NULL,
  `ChangeFreqMapaWeb` varchar(25) DEFAULT '0' COMMENT 'Abstract,ValoresChangeFreq,IDTipo',
  PRIMARY KEY (`IDPermiso`),
  UNIQUE KEY `PrimaryKeyMD5` (`PrimaryKeyMD5`),
  KEY `EsPredeterminado` (`EsPredeterminado`),
  KEY `Revisado` (`Revisado`),
  KEY `Publicar` (`Publicar`),
  KEY `Deleted` (`Deleted`),
  KEY `Privacidad` (`Privacidad`),
  KEY `Orden` (`Orden`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposfuncionalidad`
--

CREATE TABLE IF NOT EXISTS `tiposfuncionalidad` (
  `IDTipoFuncionalidad` bigint(11) NOT NULL AUTO_INCREMENT,
  `Codigo` varchar(15) DEFAULT NULL,
  `Titulo` varchar(100) DEFAULT NULL,
  `Descripcion` varchar(100) DEFAULT NULL,
  `Observaciones` text,
  `PrimaryKeyMD5` varchar(100) DEFAULT NULL,
  `EsPredeterminado` tinyint(1) DEFAULT '0' COMMENT 'Abstract,ValoresSN,IDTipo',
  `Revisado` tinyint(1) DEFAULT '0' COMMENT 'Abstract,ValoresSN,IDTipo',
  `Publicar` tinyint(1) DEFAULT '0' COMMENT 'Abstract,ValoresSN,IDTipo',
  `VigenteDesde` datetime NOT NULL,
  `VigenteHasta` datetime NOT NULL,
  `CreatedBy` int(4) NOT NULL,
  `CreatedAt` datetime NOT NULL,
  `ModifiedBy` int(4) NOT NULL,
  `ModifiedAt` datetime NOT NULL,
  `Deleted` tinyint(1) DEFAULT '0' COMMENT 'Abstract,ValoresSN,IDTipo',
  `DeletedBy` int(4) DEFAULT NULL,
  `DeletedAt` datetime DEFAULT NULL,
  `Privacidad` tinyint(1) DEFAULT '0' COMMENT 'Abstract,ValoresPrivacidad,IDTipo',
  `Orden` bigint(11) DEFAULT NULL,
  `Imagenes` varchar(255) DEFAULT NULL,
  `FechaPublicacion` datetime DEFAULT NULL,
  `UrlAmigable` varchar(255) DEFAULT NULL,
  `NumeroVisitas` int(11) DEFAULT NULL,
  `MetatagTitle` varchar(255) DEFAULT NULL,
  `MetatagKeywords` varchar(255) DEFAULT NULL,
  `MetatagDescription` varchar(255) DEFAULT NULL,
  `MetatagTitleSimple` tinyint(1) DEFAULT '0' COMMENT 'Abstract,ValoresSN,IDTipo',
  `MetatagTitlePosicion` tinyint(1) DEFAULT '0' COMMENT 'Abstract,ValoresDchIzq,IDTipo',
  `MostrarEnMapaWeb` tinyint(1) DEFAULT '0' COMMENT 'Abstract,ValoresSN,IDTipo',
  `ImportanciaMapaWeb` varchar(5) DEFAULT NULL,
  `ChangeFreqMapaWeb` varchar(25) DEFAULT '0' COMMENT 'Abstract,ValoresChangeFreq,IDTipo',
  PRIMARY KEY (`IDTipoFuncionalidad`),
  UNIQUE KEY `Codigo` (`Codigo`),
  UNIQUE KEY `PrimaryKeyMD5` (`PrimaryKeyMD5`),
  KEY `EsPredeterminado` (`EsPredeterminado`),
  KEY `Revisado` (`Revisado`),
  KEY `Publicar` (`Publicar`),
  KEY `Deleted` (`Deleted`),
  KEY `Privacidad` (`Privacidad`),
  KEY `Orden` (`Orden`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposusuarios`
--

CREATE TABLE IF NOT EXISTS `tiposusuarios` (
  `IDTipoUsuario` bigint(11) NOT NULL AUTO_INCREMENT,
  `TipoUsuario` varchar(50) DEFAULT NULL,
  `Observaciones` text,
  `PrimaryKeyMD5` varchar(100) DEFAULT NULL,
  `EsPredeterminado` tinyint(1) DEFAULT '0' COMMENT 'Abstract,ValoresSN,IDTipo',
  `Revisado` tinyint(1) DEFAULT '0' COMMENT 'Abstract,ValoresSN,IDTipo',
  `Publicar` tinyint(1) DEFAULT '0' COMMENT 'Abstract,ValoresSN,IDTipo',
  `VigenteDesde` datetime NOT NULL,
  `VigenteHasta` datetime NOT NULL,
  `CreatedBy` int(4) NOT NULL,
  `CreatedAt` datetime NOT NULL,
  `ModifiedBy` int(4) NOT NULL,
  `ModifiedAt` datetime NOT NULL,
  `Deleted` tinyint(1) DEFAULT '0' COMMENT 'Abstract,ValoresSN,IDTipo',
  `DeletedBy` int(4) DEFAULT NULL,
  `DeletedAt` datetime DEFAULT NULL,
  `Privacidad` tinyint(1) DEFAULT '0' COMMENT 'Abstract,ValoresPrivacidad,IDTipo',
  `Orden` bigint(11) DEFAULT NULL,
  `Imagenes` varchar(255) DEFAULT NULL,
  `FechaPublicacion` datetime DEFAULT NULL,
  `UrlAmigable` varchar(255) DEFAULT NULL,
  `NumeroVisitas` int(11) DEFAULT NULL,
  `MetatagTitle` varchar(255) DEFAULT NULL,
  `MetatagKeywords` varchar(255) DEFAULT NULL,
  `MetatagDescription` varchar(255) DEFAULT NULL,
  `MetatagTitleSimple` tinyint(1) DEFAULT '0' COMMENT 'Abstract,ValoresSN,IDTipo',
  `MetatagTitlePosicion` tinyint(1) DEFAULT '0' COMMENT 'Abstract,ValoresDchIzq,IDTipo',
  `MostrarEnMapaWeb` tinyint(1) DEFAULT '0' COMMENT 'Abstract,ValoresSN,IDTipo',
  `ImportanciaMapaWeb` varchar(5) DEFAULT NULL,
  `ChangeFreqMapaWeb` varchar(25) DEFAULT '0' COMMENT 'Abstract,ValoresChangeFreq,IDTipo',
  PRIMARY KEY (`IDTipoUsuario`),
  UNIQUE KEY `PrimaryKeyMD5` (`PrimaryKeyMD5`),
  KEY `EsPredeterminado` (`EsPredeterminado`),
  KEY `Revisado` (`Revisado`),
  KEY `Publicar` (`Publicar`),
  KEY `Deleted` (`Deleted`),
  KEY `Privacidad` (`Privacidad`),
  KEY `Orden` (`Orden`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tiposusuarios`
--

INSERT INTO `tiposusuarios` (`IDTipoUsuario`, `TipoUsuario`, `Observaciones`, `PrimaryKeyMD5`, `EsPredeterminado`, `Revisado`, `Publicar`, `VigenteDesde`, `VigenteHasta`, `CreatedBy`, `CreatedAt`, `ModifiedBy`, `ModifiedAt`, `Deleted`, `DeletedBy`, `DeletedAt`, `Privacidad`, `Orden`, `Imagenes`, `FechaPublicacion`, `UrlAmigable`, `NumeroVisitas`, `MetatagTitle`, `MetatagKeywords`, `MetatagDescription`, `MetatagTitleSimple`, `MetatagTitlePosicion`, `MostrarEnMapaWeb`, `ImportanciaMapaWeb`, `ChangeFreqMapaWeb`) VALUES
(1, 'Usuario Cpanel', NULL, '06735d4e246265dfaf01a565b763d7be', 1, NULL, 1, '2000-01-01 00:00:00', '2020-01-01 00:00:00', 1, '2012-08-02 20:19:35', 1, '2012-08-02 20:19:35', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Usuario WEB', NULL, '2f3fbd4745e6e5c4db1d9aaa08389b1d', 1, NULL, 1, '2000-01-01 00:00:00', '2020-01-01 00:00:00', 1, '2012-08-02 20:19:35', 1, '2012-08-02 20:19:35', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `IDUsuario` bigint(11) NOT NULL AUTO_INCREMENT,
  `IDPerfil` bigint(11) DEFAULT NULL COMMENT 'db,Perfiles,IDPerfil',
  `IDRol` bigint(11) DEFAULT NULL COMMENT 'db,Roles,IDRol',
  `IDEmpresa` bigint(11) DEFAULT NULL COMMENT 'db,Empresas,IDEmpresa',
  `IDTipoUsuario` bigint(11) DEFAULT NULL COMMENT 'db,TiposUsuarios,IDTipoUsuario',
  `Login` varchar(50) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `TelefonoMovil` varchar(25) DEFAULT NULL,
  `Nombre` varchar(100) DEFAULT NULL,
  `Apellidos` varchar(100) DEFAULT NULL,
  `CambioPassword` tinyint(1) DEFAULT '0' COMMENT 'Abstract,ValoresSN,IDTipo',
  `Ips` varchar(255) DEFAULT NULL,
  `NLogin` int(4) DEFAULT NULL,
  `UltimoLogin` datetime DEFAULT NULL,
  `Observaciones` text,
  `PrimaryKeyMD5` varchar(100) DEFAULT NULL,
  `EsPredeterminado` tinyint(1) DEFAULT '0' COMMENT 'Abstract,ValoresSN,IDTipo',
  `Revisado` tinyint(1) DEFAULT '0' COMMENT 'Abstract,ValoresSN,IDTipo',
  `Publicar` tinyint(1) DEFAULT '0' COMMENT 'Abstract,ValoresSN,IDTipo',
  `VigenteDesde` datetime NOT NULL,
  `VigenteHasta` datetime NOT NULL,
  `CreatedBy` int(4) NOT NULL,
  `CreatedAt` datetime NOT NULL,
  `ModifiedBy` int(4) NOT NULL,
  `ModifiedAt` datetime NOT NULL,
  `Deleted` tinyint(1) DEFAULT '0' COMMENT 'Abstract,ValoresSN,IDTipo',
  `DeletedBy` int(4) DEFAULT NULL,
  `DeletedAt` datetime DEFAULT NULL,
  `Privacidad` tinyint(1) DEFAULT '0' COMMENT 'Abstract,ValoresPrivacidad,IDTipo',
  `Orden` bigint(11) DEFAULT NULL,
  `Imagenes` varchar(255) DEFAULT NULL,
  `FechaPublicacion` datetime DEFAULT NULL,
  `UrlAmigable` varchar(255) DEFAULT NULL,
  `NumeroVisitas` int(11) DEFAULT NULL,
  `MetatagTitle` varchar(255) DEFAULT NULL,
  `MetatagKeywords` varchar(255) DEFAULT NULL,
  `MetatagDescription` varchar(255) DEFAULT NULL,
  `MetatagTitleSimple` tinyint(1) DEFAULT '0' COMMENT 'Abstract,ValoresSN,IDTipo',
  `MetatagTitlePosicion` tinyint(1) DEFAULT '0' COMMENT 'Abstract,ValoresDchIzq,IDTipo',
  `MostrarEnMapaWeb` tinyint(1) DEFAULT '0' COMMENT 'Abstract,ValoresSN,IDTipo',
  `ImportanciaMapaWeb` varchar(5) DEFAULT NULL,
  `ChangeFreqMapaWeb` varchar(25) DEFAULT '0' COMMENT 'Abstract,ValoresChangeFreq,IDTipo',
  PRIMARY KEY (`IDUsuario`),
  UNIQUE KEY `PrimaryKeyMD5` (`PrimaryKeyMD5`),
  KEY `IDPerfil` (`IDPerfil`),
  KEY `ApellidosNombre` (`Apellidos`,`Nombre`),
  KEY `EsPredeterminado` (`EsPredeterminado`),
  KEY `Revisado` (`Revisado`),
  KEY `Publicar` (`Publicar`),
  KEY `Deleted` (`Deleted`),
  KEY `Privacidad` (`Privacidad`),
  KEY `Orden` (`Orden`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`IDUsuario`, `IDPerfil`, `IDRol`, `IDEmpresa`, `IDTipoUsuario`, `Login`, `Password`, `Email`, `TelefonoMovil`, `Nombre`, `Apellidos`, `CambioPassword`, `Ips`, `NLogin`, `UltimoLogin`, `Observaciones`, `PrimaryKeyMD5`, `EsPredeterminado`, `Revisado`, `Publicar`, `VigenteDesde`, `VigenteHasta`, `CreatedBy`, `CreatedAt`, `ModifiedBy`, `ModifiedAt`, `Deleted`, `DeletedBy`, `DeletedAt`, `Privacidad`, `Orden`, `Imagenes`, `FechaPublicacion`, `UrlAmigable`, `NumeroVisitas`, `MetatagTitle`, `MetatagKeywords`, `MetatagDescription`, `MetatagTitleSimple`, `MetatagTitlePosicion`, `MostrarEnMapaWeb`, `ImportanciaMapaWeb`, `ChangeFreqMapaWeb`) VALUES
(1, 1, NULL, NULL, 1, 'admin', 'e25c07d7411d92794f667f9a4d9bb348', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '06735d4e246265dfaf01a565b763d7be', 1, NULL, 1, '2000-01-01 00:00:00', '2020-01-01 00:00:00', 1, '2012-08-02 20:19:35', 1, '2012-08-02 20:19:35', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 2, NULL, NULL, 1, 'adm', 'f1bab2bd0d03d6e75ae70aec614c3bbf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2f3fbd4745e6e5c4db1d9aaa08389b1d', 1, NULL, 1, '2000-01-01 00:00:00', '2020-01-01 00:00:00', 1, '2012-08-02 20:19:35', 1, '2012-08-02 20:19:35', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
