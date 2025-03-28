USE [NewsDB]
GO
/****** Object:  Table [dbo].[News]    Script Date: 07/03/2025 21:54:00 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[News](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[title] [nvarchar](255) NOT NULL,
	[content] [nvarchar](max) NOT NULL,
	[created_at] [datetime] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET IDENTITY_INSERT [dbo].[News] ON 

INSERT [dbo].[News] ([id], [title], [content], [created_at]) VALUES (1, N'Bản cập nhật mới của Windows', N'Microsoft vừa ra mắt phiên bản Windows mới với nhiều tính năng hấp dẫn.', CAST(N'2025-03-07T21:51:23.213' AS DateTime))
INSERT [dbo].[News] ([id], [title], [content], [created_at]) VALUES (2, N'Google phát triển AI tiên tiến', N'Google giới thiệu AI mới với khả năng tư duy gần như con người.', CAST(N'2025-03-07T21:51:23.213' AS DateTime))
SET IDENTITY_INSERT [dbo].[News] OFF
GO
ALTER TABLE [dbo].[News] ADD  DEFAULT (getdate()) FOR [created_at]
GO
