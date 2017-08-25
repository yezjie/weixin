-- phpMyAdmin SQL Dump
-- version 3.3.8.1
-- http://www.phpmyadmin.net
--
-- 主机: w.rdc.sae.sina.com.cn:3307
-- 生成日期: 2017 年 05 月 26 日 19:57
-- 服务器版本: 5.6.23
-- PHP 版本: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `app_yezj`
--

-- --------------------------------------------------------

--
-- 表的结构 `guser`
--

CREATE TABLE IF NOT EXISTS `guser` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `openid` varchar(100) DEFAULT NULL,
  `nickname` varchar(100) DEFAULT NULL,
  `headimgurl` varchar(255) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `score` int(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `guser`
--

INSERT INTO `guser` (`id`, `openid`, `nickname`, `headimgurl`, `name`, `phone`, `score`) VALUES
(1, 'oBaI30bV35-z-B-BpCxmadvT7HEU', '吃个面包', 'http://wx.qlogo.cn/mmopen/DPD6nxJgo5DN5MubfCQRW7nLZF2nUvgiafRzr3pkFia6kWjKDpogezXZHMxiavupOWyGAZXYEhwzr2GLYxa8CLDIqvic8M5AicPPY/0', '阿达', '123434367635', 42),
(2, 'oBaI30YM_eqnrmTWwd5CnfJlbE7U', '@吥 説', 'http://wx.qlogo.cn/mmopen/PiajxSqBRaEIViaIdevicqYEicia2zrNK6ibiao6TbDibU0TrDYPSvXBzUGXSibewzWCqEx59x3RlCBianaXzSXpxeHAs9Dw/0', 'fdsxg', '4654654563', 39),
(3, 'oBaI30U__oqbVSsj2U2FlWjSbvx8', '小花', 'http://wx.qlogo.cn/mmopen/3ZKPHcVCLTibhIC9b0GcCGrjiatP8yojg983408Od5IZCaaZFnxYk5V78zTmI9nSZOTPwOmyic2xiajLVia9HaMxR5ITgNM75CCTf/0', '', '', 39),
(4, 'oBaI30XD9QCn4YQB8-sg_0gapWno', '培根汉堡', 'http://wx.qlogo.cn/mmopen/DPD6nxJgo5CyonpvLqNtj4Am7guZjgDVtQf9lPEX740EyhxRHO8qvBKDNoG2PmOOZhAibcicObiajzzx9U7feFAa3ibpM5G0r5WI/0', '帅哥李培根', '2123132132132', 34),
(5, 'oBaI30WRnRzJC988CwOnMpWV2xjo', 'onleap', 'http://wx.qlogo.cn/mmopen/DPD6nxJgo5DN5MubfCQRWyVHT9tBKribvSTs0CBrfOn4K3O5mibIckmqkftHcqrZmoPJHtOXgAuqDY2epsOQvoiaZ1rgCTqsdg1/0', '吴兵兵', '1213213123123', 42);

-- --------------------------------------------------------

--
-- 表的结构 `weiticket`
--

CREATE TABLE IF NOT EXISTS `weiticket` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `ticket` varchar(255) DEFAULT NULL,
  `time` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `weiticket`
--

INSERT INTO `weiticket` (`id`, `ticket`, `time`) VALUES
(1, 'HoagFKDcsGMVCIY2vOjf9oAlkzqeI4MkWWDTkqSBErynnTghJJiBtkao9iHcS--l3or9FTluBEDc-WwsB4pCfg', '1495723720');

-- --------------------------------------------------------

--
-- 表的结构 `weitoken`
--

CREATE TABLE IF NOT EXISTS `weitoken` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `token` varchar(255) DEFAULT NULL,
  `time` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `weitoken`
--

INSERT INTO `weitoken` (`id`, `token`, `time`) VALUES
(1, 'EoJ8FB1xiNMlQ8cZdnLaaEX5W87U--WYfGAe8STkeOhXOITtlkbDT2vP664PCGXYZmVKWNC0ONbSdD1yfvDCGiXM0nxAZpMU6ma4mymOaX330hfbPraAT5zwwG5M-0bqNSDdADATYJ', '1495760677');
