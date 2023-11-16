﻿// <auto-generated />
using System;
using Cyan.Infraestructure.Data;
using Microsoft.EntityFrameworkCore;
using Microsoft.EntityFrameworkCore.Infrastructure;
using Microsoft.EntityFrameworkCore.Metadata;
using Microsoft.EntityFrameworkCore.Migrations;
using Microsoft.EntityFrameworkCore.Storage.ValueConversion;

#nullable disable

namespace Cyan.Infraestructure.Migrations
{
    [DbContext(typeof(AppDbContext))]
    [Migration("20231116020214_init_01")]
    partial class init_01
    {
        /// <inheritdoc />
        protected override void BuildTargetModel(ModelBuilder modelBuilder)
        {
#pragma warning disable 612, 618
            modelBuilder
                .HasAnnotation("ProductVersion", "7.0.14")
                .HasAnnotation("Relational:MaxIdentifierLength", 128);

            SqlServerModelBuilderExtensions.UseIdentityColumns(modelBuilder);

            modelBuilder.Entity("Cyan.Domain.Entities.BetHistory", b =>
                {
                    b.Property<int>("BetHistoryId")
                        .ValueGeneratedOnAdd()
                        .HasColumnType("int");

                    SqlServerPropertyBuilderExtensions.UseIdentityColumn(b.Property<int>("BetHistoryId"));

                    b.Property<double>("BetAmount")
                        .HasColumnType("float");

                    b.Property<DateTime>("CreateDate")
                        .HasColumnType("datetime2");

                    b.Property<double>("Discount")
                        .HasColumnType("float");

                    b.Property<string>("Event")
                        .HasColumnType("nvarchar(max)");

                    b.Property<string>("HouseBetName")
                        .HasColumnType("nvarchar(max)");

                    b.Property<bool>("IsDeleted")
                        .HasColumnType("bit");

                    b.Property<bool>("IsWon")
                        .HasColumnType("bit");

                    b.Property<string>("Market")
                        .HasColumnType("nvarchar(max)");

                    b.Property<double>("Odds")
                        .HasColumnType("float");

                    b.Property<double>("PayoutAmount")
                        .HasColumnType("float");

                    b.Property<DateTime>("UpdateDate")
                        .HasColumnType("datetime2");

                    b.Property<string>("UserCreate")
                        .IsRequired()
                        .HasColumnType("nvarchar(max)");

                    b.Property<int?>("UserId")
                        .HasColumnType("int");

                    b.Property<string>("UserUpdate")
                        .IsRequired()
                        .HasColumnType("nvarchar(max)");

                    b.HasKey("BetHistoryId");

                    b.ToTable("BetHistory");
                });
#pragma warning restore 612, 618
        }
    }
}
