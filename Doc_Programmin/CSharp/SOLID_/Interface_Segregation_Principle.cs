﻿using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _04_SOLID
{
    class Program
    {
        static void Main(string[] args)
        {
        }
    }

    public interface IDatabaseManager
    {
        void Add();
        void Remove();
        void Update();
        //void RemoveAll(int[] Ids);
    }

    public interface IDatabaseRemoveAll : IDatabaseManager
    {
        void RemoveAll(int[] Ids);
    }

    public class MyClass : IDatabaseRemoveAll
    {
        public void Add()
        {
            throw new NotImplementedException();
        }

        public void Remove()
        {
            throw new NotImplementedException();
        }

        public void Update()
        {
            throw new NotImplementedException();
        }

        public void RemoveAll(int[] Ids)
        {
            throw new NotImplementedException();
        }
    }
}
